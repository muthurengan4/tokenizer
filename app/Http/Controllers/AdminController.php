<?php

namespace App\Http\Controllers;

use App\CreateToken;
use DateTime;
use DateTimeZone;
use DB;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Mail;
use Redirect;
use Session;

class AdminController extends BaseController
{
    public function index()
    {
        $data = CreateToken::orderBy('created_at', 'desc')->paginate(15);
        foreach ($data as $d) {
            $new_str = new DateTime($d->created_at, new DateTimeZone('UTC'));
            $new_str->setTimeZone(new DateTimeZone('Asia/Kolkata'));
            $d->created_at = $new_str->format('Y-m-d H:i:s');
        }
        return view('admin.home', ['data' => $data]);
    }
    public function send_email()
    {
        try {
            Mail::html(request()->body, function ($message) {
                $message->subject(request()->subject);
                $message->to(request()->email, request()->name);
                CreateToken::where("id", request()->table_id)->update(["last_sent_mail_id" => $message->getId()]);
            });
            return redirect()->back()->with('success', 'Mail has been sent to ' . request()->email . ' !');

        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Mail has not been sent to ' . request()->email . ' !');

        }
    }
    public function admin_mail_page($userid)
    {
        try {
            $user = CreateToken::where("id", $userid)->first();
            $client = new Client();
            $event_occured = 'N/A';
            $event_type = 'N/A';
            $domain = env('MAILGUN_DOMAIN');
            $endpoint = env('MAILGUN_END_POINT');
            $secret = env('MAILGUN_SECRET');
            if ($user->last_sent_mail_id) {
                $res = $client->request('GET', $endpoint, [
                    'auth' => ['api', $secret],
                    'query' => [
                        'message-id' => $user->last_sent_mail_id,
                    ],
                ]);
                if ($res->getBody()) {
                    $email = json_decode($res->getBody());
                    $item_count = count($email->items);
                    if ($item_count) {
                        $event = $email->items[$item_count - 1];
                        $event_occured = date("m/d/Y H:i:s", $event->timestamp);
                        $event_type = $event->event;
                    }
                }
            }
            $view = view('emailtemplates/token_reminder', compact('user'));
            $html = $view->render(); // Hello, World!
            return view('admin.users.mail', compact('user', 'html', 'event_occured', 'event_type'));
        } catch (Exception $e) {
            abort(404);
        }
    }
    public function login(Request $request)
    {
        return view('admin.login');
    }

    public function create_admin()
    {
        $password = $this->encrypt_password(12345678);
        DB::table('admin')->insert(['email' => 'admin@assetplatform.net', 'password' => $password]);
        return 1;
    }

    public function validate_login(Request $request)
    {
        $email = $request->email;
        $password = $this->encrypt_password($request->password);
        $count = DB::table('admin')->where('email', $email)->where('password', $password)->first();
        if (isset($count->id)) {
            $request->session()->put('user_id', $count->id);
            return Redirect::route('index');
        } else {
            return back()->with('alert', 'Invalid Credential');
        }
    }

    public function show_change_password_form(Request $request)
    {
        return view('admin.change_password');
    }

    public function change_password_post(Request $request)
    {
        $old_password = $this->encrypt_password($request->old_password);
        $check = DB::table('admin')->where('password', $old_password)->count();
        if ($check != 0) {
            $new_password = $this->encrypt_password($request->new_password);
            DB::table('admin')->where('password', $old_password)->update(['password' => $new_password]);
            return back()->with('success', 'Password changed successfully');
        } else {
            return back()->with('alert', 'Please check your old password');
        }

    }
    public function logout(Request $request)
    {
        $request->session()->forget('user_id');
        return view('admin.login');
    }
}
