<?php

namespace App\Http\Controllers;

use App\Country;
use App\CreateToken;
use Illuminate\Http\Request;
use Mail;
use Redirect;
use Session;

class HomeController extends BaseController
{
    public function index()
    {
        $countries = Country::groupby('country')->get();
        return view('home', compact('countries'));
    }
    public function verifyMe($verification_token)
    {
        //master commit
        $token = CreateToken::where(['email_verification' => $verification_token])->first();
        // dd( $token);
        $status = 0;
        if ($token === null) {
            $status = 0;
        } else if (!$token->email_verified) {
            $status = 1;
            $token->email_verified = true;
            $token->save();
        } else {
            $status = 2;
        }
        return view('status', compact('status', 'token'));
    }
    private function is_mail_verified($token_id)
    {
        $token = CreateToken::where(['id' => $token_id])->first();
        return $token && $token->email_verified;

    }
    public function resendMail(Request $request)
    {
        $token = CreateToken::where(['id' => $request->token_id])->first();
        $token->email = $request->email;
        $token->save();
        $to = $request->email;
        $sub = 'Please verify your email ID ( for Token generation )';
        $data = $token->toArray();
        $data['verify_url'] = route('verifyMe', ['verification_token' => $data['email_verification']]);
        Mail::send('emailtemplates/mail_verification', compact("data"), function ($message) use ($to, $sub) {
            $message->to($to)->subject($sub);
        });

        return response()->json(['status' => true]);
    }
    public function isMailVerified(Request $request)
    {
        if ($this->is_mail_verified($request->token_id)) {
            return response()->json(['verified' => true]);
        }
        return response()->json(['verified' => false]);

    }
    public function TokenPreview(Request $request)
    {
        $uploads = 'public/uploads/';
        if ($request->hasFile('symbol')) {
            $extension = $request->file('symbol')->getClientOriginalExtension();
            $symbol = strtolower(time() . str_random(40) . '.' . $extension);
            $request->file('symbol')->move($uploads, $symbol);
        } else {
            $symbol = '';
        }
        $data['symbol'] = $symbol;
        $data['firstname'] = $request->firstname;
        $data['lastname'] = $request->lastname;
        $data['email'] = $request->email;
        $data['phonenumber'] = $request->phonenumber;
        $data['country'] = $request->country;
        $data['asset'] = $request->asset;
        $data['equity_value'] = $request->equity_value;
        $data['currency'] = $request->currency;
        $data['other_type'] = $request->other_type;
        $data['fixed_value'] = $request->fixed_value;
        $data['utility_value'] = $request->utility_value;
        $data['other_equity_text'] = $request->other_equity_text ? $request->other_equity_text : "";

        // Agri Values
        $data['estatename'] = $request->estatename;
        $data['estate_area_mm'] = $request->estate_area_mm;
        $data['estate_area_token'] = $request->estate_area_token;
        $data['token_supply'] = $request->token_supply;
        $data['cropgrown'] = $request->cropgrown;
        if ($request->estate_location == 'others') {
            $data['estate_location_input'] = $request->estate_location_input;
            $data['estate_location_state_input'] = $request->estate_location_state_input;
        }
        $data['estate_location'] = $request->estate_location;
        $data['estate_location_state'] = $request->estate_location_state;
        $data['reg_no'] = $request->reg_no;
        // End of Agri Values

        // artcoll Values
        $data['artname'] = $request->artname;
        $data['art_desc'] = $request->art_desc;
        $data['artist_name'] = $request->artist_name;
        $data['orgin'] = $request->orgin;
        $data['yearcreated'] = $request->yearcreated;
        $data['medium'] = $request->medium;
        $data['artwork_type'] = $request->artwork_type;
        $data['collectorsname'] = $request->collectorsname;
        $data['copyright'] = $request->copyright;
        $data['artworkusd'] = $request->artworkusd;
        $data['max_token'] = $request->max_token;
        $data['perunit'] = $request->perunit;
        // End of artcoll Values

        // Artwork Values
        $data['charismatic_power_quotient'] = $request->charismatic_power_quotient;
        $data['quotient_work'] = $request->quotient_work;
        $data['aqrcp'] = $request->aqrcp;
        $data['previous_owner'] = implode(',', $request->previous_owner);
        $data['from_year'] = implode(',', $request->from_year);
        $data['to_year'] = implode(',', $request->to_year);
        $data['market_demand_quotient'] = $request->market_demand_quotient;
        $data['auction_house'] = $request->auction_house;
        $data['auction_house_add'] = $request->auction_house_add;
        $data['artwork_insured'] = $request->artwork_insured;
        $data['insurance_id'] = $request->insurance_id;
        $data['insurance_company_name'] = $request->insurance_company_name;
        $data['insured_on'] = $request->insured_on;
        $data['insure_expiry_date'] = $request->insure_expiry_date;
        // End of Artwork Values

        // real estate Values
        $data['realestate_name'] = $request->realestate_name;
        $data['property_type'] = $request->property_type;
        if ($request->property_location == 'others') {
            $data['property_location_input'] = $request->property_location_input;
            $data['property_location_state_input'] = $request->property_location_state_input;
        }
        $data['property_location_address'] = $request->property_location_address;
        $data['property_location'] = $request->property_location;
        $data['property_location_state'] = $request->property_location_state;
        $data['realestate_usd'] = $request->realestate_usd;
        $data['total_property_size'] = $request->total_property_size;
        $data['property_size_mm'] = $request->property_size_mm;
        $data['property_size_mm_token'] = $request->property_size_mm_token;
        $data['max_token_supply'] = $request->max_token_supply;
        // End of real estate Values

        // Quarry Values
        $data['quarry_name'] = $request->quarry_name;
        $data['mine_type'] = $request->mine_type;
        $data['quarry_id'] = $request->quarry_id;
        $data['quarry_loc_address'] = $request->quarry_loc_address;
        $data['quarry_loc'] = $request->quarry_loc;
        $data['permit_id'] = $request->permit_id;
        $data['quarry_opt'] = $request->quarry_opt;
        $data['quarry_size_meters'] = $request->quarry_size_meters;
        $data['total_quarry_size_meters'] = $request->total_quarry_size_meters;
        $data['unit_total_qty_mineral'] = $request->unit_total_qty_mineral;
        $data['per_unit_to_tokenize'] = $request->per_unit_to_tokenize;
        $data['total_supply_of_tokens'] = $request->total_supply_of_tokens;
        // End of quarry Values

        // Others Values
        $data['asset_name'] = $request->asset_name;
        $data['asset_type'] = $request->asset_type;
        $data['about_asset'] = $request->about_asset;
        $data['asset_id'] = $request->asset_id;
        $data['asset_value_usd'] = $request->asset_value_usd;
        $data['asset_measure_unit'] = $request->asset_measure_unit;
        $data['asset_qty'] = $request->asset_qty;
        $data['per_token_unit'] = $request->per_token_unit;
        $data['quantity_to_tokenize'] = $request->quantity_to_tokenize;
        $data['max_token_supply_asset'] = $request->max_token_supply_asset;
        // End of others Values

        // Utility values
        $data['other_niche_text'] = $request->other_niche_text;
        // End of Utility values

        $data['legal_option'] = $request->legal_option;
        $data['usd'] = $request->usd;
        $data['price_per_token'] = $request->price_per_token;

        if (isset($request->marketing)) {
            if (count($request->marketing) > 0) {
                $data['marketing'] = implode(',', $request->marketing);
            }
        }
        // $data['address']               = $request->address;
        // $data['symbol']                = $symbol;
        $data['cname'] = $request->cname;
        $data['total_supply'] = $request->total_supply;
        $data['decimals'] = $request->decimals;
        $data['fund_currency'] = $request->fund_currency;
        $data['asset_currency'] = $request->asset_currency;
        $verification_token = $this->encrypt_password(time());
        $data['email_verification'] = $data1['email_verification'] = $verification_token;
        $data1['email'] = $request->email;
        $token = CreateToken::create($data1);
        $data['token_id'] = $token->id;
        $data['verify_url'] = route("verifyMe", ['verification_token' => $verification_token]);
        $data['crypto_coin'] = $request->crypto_coin;

        $data['token_abbreviation'] = $request->token_abbreviation;
        $data['pre_fix_token_address'] = $request->pre_fix_token_address;
        $data['verbal_timestamp'] = $request->verbal_timestamp;
        $data['smallest_unit_of_coin'] = $request->smallest_unit_of_coin;
        $data['num_of_confirmations'] = $request->num_of_confirmations;

        // return view('emailtemplates/mail_verification', compact('data'));
        \Session::put('create_token_id', $token['id']);
        $sub = 'Please verify your email ID ( for Token generation )';
        $to = $request->email;
        Mail::send('emailtemplates/mail_verification', compact("data"), function ($message) use ($to, $sub) {
            $message->to($to)->subject($sub);
        });

        return view('tokenpreviewpage', compact('data'));
    }
    public function view_template()
    {
        return view('emailtemplates/token_creation', compact('token_details'));
    }
    public function CreateToken(Request $request)
    {
        $uploads = 'public/uploads/';
        if ($request->hasFile('symbol')) {
            $extension = $request->file('symbol')->getClientOriginalExtension();
            $symbol = strtolower(time() . str_random(40) . '.' . $extension);
            $request->file('symbol')->move($uploads, $symbol);
        } else {
            $symbol = '';
        }
        // $sql                        = new CreateToken;
        $ID = \Session::get('create_token_id');

        if ($ID != '') {
            $sql = CreateToken::find($ID);
        } else {
            $sql = new CreateToken();
        }

        $sql->firstname = $request->firstname;
        $sql->lastname = $request->lastname;
        $sql->email = $request->email;
        $sql->crypto_coin = $request->crypto_coin;
        $sql->phonenumber = $request->phonenumber;
        $sql->country = $request->country;
        $sql->asset = $request->asset;
        $sql->equity_value = $request->equity_value;
        $sql->currency = $request->currency;
        $sql->other_type = $request->other_type;
        $sql->fixed_value = $request->fixed_value;
        // $sql->fund_value            = $request->fund_value;
        $sql->utility_value = $request->utility_value;
        $sql->debt_value = $request->debt_value;

        // Agri Values
        $sql->agri_estatename = $request->estatename;
        $sql->agri_estate_area_mm = $request->estate_area_mm;
        $sql->agri_estate_area_token = $request->estate_area_token;
        $sql->agri_token_supply = $request->token_supply;
        $sql->agri_cropgrown = $request->cropgrown;
        $sql->agri_estate_location = $request->estate_location;
        $sql->estate_location_input = $request->estate_location_input;
        $sql->agri_estate_location_state = $request->estate_location_state;
        $sql->estate_location_state_input = $request->estate_location_state_input;
        $sql->agri_reg_no = $request->reg_no;
        // End of Agri Values

        // artcoll Values
        $sql->art_artname = $request->artname;
        $sql->art_art_desc = $request->art_desc;
        $sql->art_artist_name = $request->artist_name;
        $sql->art_orgin = $request->orgin;
        $sql->art_yearcreated = $request->yearcreated;
        $sql->art_medium = $request->medium;
        $sql->art_artwork_type = $request->artwork_type;
        $sql->art_collectorsname = $request->collectorsname;
        $sql->art_copyright = $request->copyright;
        $sql->art_artworkusd = $request->artworkusd;
        $sql->art_max_token = $request->max_token;
        $sql->art_perunit = $request->perunit;
        // End of artcoll Values

        // Artwork Values
        $sql->charismatic_power_quotient = $request->charismatic_power_quotient;
        $sql->quotient_work = $request->quotient_work;
        $sql->aqrcp = $request->aqrcp;
        if ($request->fixed_value == 'Art/Collectable') {
            $sql->previous_owner = implode(',', $request->previous_owner);
            $sql->from_year = implode(',', $request->from_year);
            $sql->to_year = implode(',', $request->to_year);
        }
        $sql->market_demand_quotient = $request->market_demand_quotient;
        $sql->auction_house = $request->auction_house;
        $sql->auction_house_add = $request->auction_house_add;
        $sql->artwork_insured = $request->artwork_insured;
        $sql->insurance_id = $request->insurance_id;
        $sql->insurance_company_name = $request->insurance_company_name;
        $sql->insured_on = $request->insured_on;
        $sql->insure_expiry_date = $request->insure_expiry_date;
        // End of Artwork Values

        // real estate Values
        $sql->real_realestate_name = $request->realestate_name;
        $sql->real_property_type = $request->property_type;
        $sql->real_property_location_address = $request->property_location_address;
        $sql->real_property_location = $request->property_location;
        $sql->real_property_location_input = $request->property_location_input;
        $sql->real_property_location_state = $request->property_location_state;
        $sql->real_property_location_state_input = $request->property_location_state_input;
        $sql->real_realestate_usd = $request->realestate_usd;
        $sql->real_total_property_size = $request->total_property_size;
        $sql->real_property_size_mm = $request->property_size_mm;
        $sql->real_property_size_mm_token = $request->property_size_mm_token;
        $sql->real_max_token_supply = $request->max_token_supply;
        // End of real estate Values

        // Quarry Values
        $sql->quarry_name = $request->quarry_name;
        $sql->mine_type = $request->mine_type;
        $sql->quarry_id = $request->quarry_id;
        $sql->quarry_loc_address = $request->quarry_loc_address;
        $sql->quarry_loc = $request->quarry_loc;
        $sql->permit_id = $request->permit_id;
        $sql->quarry_opt = $request->quarry_opt;
        $sql->quarry_size_meters = $request->quarry_size_meters;
        $sql->total_quarry_size_meters = $request->total_quarry_size_meters;
        $sql->unit_total_qty_mineral = $request->unit_total_qty_mineral;
        $sql->per_unit_to_tokenize = $request->per_unit_to_tokenize;
        $sql->total_supply_of_tokens = $request->total_supply_of_tokens;
        // End of quarry Values

        // Others Values
        $sql->other_asset_name = $request->asset_name;
        $sql->other_asset_type = $request->asset_type;
        $sql->other_about_asset = $request->about_asset;
        $sql->other_asset_id = $request->asset_id;
        $sql->other_asset_value_usd = $request->asset_value_usd;
        $sql->other_asset_measure_unit = $request->asset_measure_unit;
        $sql->other_asset_qty = $request->asset_qty;
        $sql->other_per_token_unit = $request->per_token_unit;
        $sql->other_quantity_to_tokenize = $request->quantity_to_tokenize;
        $sql->other_max_token_supply_asset = $request->max_token_supply_asset;
        // End of others Values

        $sql->other_niche_text = $request->other_niche_text;

        $sql->legal_option = $request->legal_option;

        // if(count($request->legal_value)>0)
        // {
        // $sql->legal_value           = implode(',',$request->legal_value);
        // }
        $sql->usd = $request->usd;

        $sql->price_per_token = $request->price_per_token;

        if (isset($request->marketing)) {
            $sql->marketing = $request->marketing;
        }

        // $sql->address               = $request->address;
        $sql->symbol = $symbol;
        $sql->cname = $request->cname;
        $sql->total_supply = $request->total_supply;
        $sql->decimals = $request->decimals;
        $sql->fund_currency = $request->fund_currency;
        $sql->asset_currency = $request->asset_currency;
        $sql->date_of_creation = date("F j, Y, g:i a");
        
        $sql->token_abbreviation = $request->token_abbreviation;
        $sql->pre_fix_token_address = $request->pre_fix_token_address;
        $sql->verbal_timestamp = $request->verbal_timestamp;
        $sql->smallest_unit_of_coin = $request->smallest_unit_of_coin;
        $sql->num_of_confirmations = $request->num_of_confirmations;

        $sql->save();

        $total_su = ($request->total_supply * pow(10, $request->decimals));
        $total_su = number_format($total_su, 0, '', '');
        // \Session::put('user_address',$request->address);
        \Session::put('total_tokens', $total_su);
        \Session::put('usd', $request->usd);
        \Session::put('user_email', $request->email);
        \Session::put('user_fname', $request->firstname);
        \Session::put('user_lname', $request->lastname);

        // $fetch = CreateToken::orderBy('id', 'desc')->first();
        $fetch = $sql;
        \Session::put('token_user_id', $sql->id);

        $sub = 'Your Tokens have been created successfully!';
        $to = $request->email;

        $body = view('emailtemplates/token_creation', compact('sql'))->render();
        // echo "hi";
        // exit;

        // $user_cred = array('user_fname' => $request->firstname, 'user_lname' => $request->lastname, 'user_email' => $request->email, 'total_supply' => $sql->total_supply, 'date_of_creation' => $sql->date_of_creation, 'fetch_id' => $sql->id, 'token_name' => $sql->cname);
        Mail::send('emailtemplates/token_creation', compact("sql"), function ($message) use ($to, $sub) {
            $message->to($to)->subject($sub);
        });

        // echo $to; exit;
        return view('success', ['token_details' => $fetch]);
    }

    public function create_token(Request $request)
    {
        //branch push
        $ID = \Session::get('create_token_id');

        if ($ID != '') {
            $sql = CreateToken::find($ID);
        } else {
            $sql = new CreateToken();
        }

        if ($request->form_name == 1) {

            $sql->firstname = $request->firstname;
            $sql->lastname = $request->lastname;
            $sql->email = $request->email;
            $sql->phonenumber = $request->phonenumber;
            $sql->country = $request->country;

            $sql->save();

            \Session::put('create_token_id', $sql->id);

            return 1;
        }
    }

    // public function success()
    // {
    //     return view('success');
    // }
    public function tokenpreviewpage()
    {
        return view('tokenpreviewpage');
    }
    public function get_state_ajax(Request $request)
    {
        $states = Country::where('country', $request->country)->get();
        return json_encode($states);
    }

    public function send_mail()
    {

        $sub = 'Your Tokens have been created successfully!';
        $to = \Session::get('user_email');
        // $to='niraimathi@sparkouttech.com';
        $body = 'Hi ' . \Session::get('user_fname') . ' ' . \Session::get('user_lname') . ',<br><br>
        Following are the information about your tokens:<br><br>
        1. Number of Tokens Created: 50,000000000<br>
        2. Name of Token: Dash coin<br>
        3. Date an time of creation: ' . date('F dS, Y') . '<br><br>
        Gas spent on creation: 0.34343 ( $20 )<br>
        Gas required to transfer 50,00000000 tokens: 8.233434 ( $29 )<br>
        Token creation fee: $49<br>
        ——————————<br>
        Total: $99 ( 3.34 ETH )<br>
        ——————————<br><br>
        Final Step: Transfer of the above tokens to your Wallet ( So you can start selling them )<br><br>
        Once you make the one time payment of $99, the tokens will be transferred. You can make the payment of 3.34 ETH to the following wallet address:<br><br>
        ETH Wallet Address: 0x2323232324235445354545<br><br>
        -or- Use this QR code:<br><br>
        <img src=\'http://api.qrserver.com/v1/create-qr-code/?size=150x150&data="0x2323232324235445354545"\'><br><br>
        Once the payment is made, please click HERE.';
        $user_cred = array('body' => $body, 'user_fname' => \Session::get('user_fname'), 'user_lname' => \Session::get('user_lname'), 'user_email' => \Session::get('user_email'));
        Mail::send('send_mail', $user_cred, function ($message) use ($to, $sub) {
            $message->to($to)->subject($sub);
        });
        return Redirect::route('success_mail');
    }
    public function success_mail()
    {
        return view('success_mail');
    }
    public function Final_Page(Request $request)
    {
        $token_id = $request->token_id;
        $token_details = CreateToken::where('id', $token_id)->first();
        $token_details->status = 1;
        $token_details->save();
        return view('final', compact('token_id', 'token_details'));
    }

    public function Final_Save(Request $request)
    {

        $uploads = 'public/uploads/';
        if ($request->hasFile('symbol')) {
            $extension = $request->file('symbol')->getClientOriginalExtension();
            $symbol = strtolower(time() . str_random(40) . '.' . $extension);
            $request->file('symbol')->move($uploads, $symbol);
        } else {
            $symbol = '';
        }
        $id = \Session::get('token_user_id');
        $sql = CreateToken::where('id', $request->token_id)->update(array('symbol' => $symbol, 'paid_address' => $request->paid_address, 'trans_hash' => $request->trans_hash, 'confirm_address' => $request->readdress, 'address' => $request->address));

        $data = CreateToken::find($request->token_id);
        $store_in_api = array(
            "owner_name" => $data->firstname . " " . $data->lastname,
            "owner_email" => $data->email,
            "symbol" => $data->token_abbreviation,
            "name" => $data->cname,
            "decimals" => $data->decimals,
            "total_supply" => $data->total_supply,
            "owner" => $data->address,
            "owner_mobile" => $data->phonenumber,
            "crypto_coin" => $data->crypto_coin,
        );

        $url = env('STORE_CONTRACT_URL')."/api/v1/users/contracts/store";
        // dd($url);
        $param_data = json_encode($store_in_api);
        // print_r($param_data); exit;
        $ch = curl_init($url);
        # Setup request to send json via POST.
        curl_setopt($ch, CURLOPT_POSTFIELDS, $param_data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        # Return response instead of printing.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        # Send request.
        $result = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($result);

        // echo $result->status; exit;
        if ($result->status == "success") {
            $creator_id = $result->body->id;

            CreateToken::where('id', $data->id)->update(array('creator_id' => $creator_id));

            $payment_detail = array(
                "id" => $creator_id,
                "payment" => $request->trans_hash,
                "address" => $request->paid_address,
            );

            $url1 = "http://104.248.124.216:3000/api/v1/users/contracts/update";

            $param_data = json_encode($payment_detail);
            $ch = curl_init($url1);
            # Setup request to send json via POST.
            curl_setopt($ch, CURLOPT_POSTFIELDS, $param_data);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            # Return response instead of printing.
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            # Send request.
            $result1 = curl_exec($ch);
            curl_close($ch);

            // print_r($result1);
            $route_url = '/completed/' . $data->id;

        } else {
            $route_url = '/';
        }

        // echo $result->body->id; exit;
        // print_r($result); exit;

        return redirect($route_url);
    }

    public function completed($id)
    {

        Session::flush();
        $data = CreateToken::find($id);

        // $total_su=($data->total_supply*pow(10,$data->decimals));
        $total_su = $data->total_supply;
        $data->total_supply = number_format($total_su, 0, '', '');

        return view('completed', ['data' => $data]);
    }

    public function Payment_Details($id)
    {
        $token_details = CreateToken::where('id', $id)->first();
        return view('pay_details', compact('token_details'));
    }

    public function learn_more()
    {
        return view('learn_more');
    }

}
