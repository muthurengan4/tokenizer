<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'HomeController@index')->name('CreateToken');
Route::post('/TokenPreview', 'HomeController@TokenPreview')->name('TokenPreview');
Route::post('/tokenpreviewpage', 'HomeController@tokenpreviewpage')->name('tokenpreviewpage');
Route::post('/create_token', 'HomeController@create_token')->name('create_token');
Route::post('/CreateToken', 'HomeController@CreateToken')->name('CreateToken');
Route::get('/verifyMe/{verification_token}', 'HomeController@verifyMe')->name('verifyMe');
Route::post('/isMailVerified', 'HomeController@isMailVerified')->name('isMailVerified');
Route::post('/resendMail', 'HomeController@resendMail')->name('resendMail');
Route::get('/ViewTemplate', 'HomeController@view_template')->name('ViewTemplate');
Route::get('/success', 'HomeController@success')->name('success');
Route::get('/get_state_ajax', 'HomeController@get_state_ajax')->name('get_state_ajax');
Route::get('/send_mail', 'HomeController@send_mail')->name('send_mail');
Route::get('/success_mail', 'HomeController@success_mail')->name('success_mail');
Route::post('/Final', 'HomeController@Final_Page')->name('Final');
Route::post('/Final_Save', 'HomeController@Final_Save')->name('Final_Save');
Route::get('/Payment_Details/{id}', 'HomeController@Payment_Details')->name('Payment_Details');
Route::get('/completed/{id}', 'HomeController@completed')->name('completed');
Route::get('/learn_more', 'HomeController@learn_more');

/// Admin routes starts

// Route::group(['middleware'=>'AuthCheck'],functio)
Route::get('/checkstatus', 'AdminController@login')->name('login');
Route::get('/logout', 'AdminController@logout')->name('logout');
Route::get('/change_password', 'AdminController@show_change_password_form')->name('change_password')->middleware(AuthCheck::class);
Route::post('/change_password_post', 'AdminController@change_password_post')->name('change_password_post')->middleware(AuthCheck::class);
Route::post('/validate_login', 'AdminController@validate_login')->name('validate_login');
Route::get('/index', 'AdminController@index')->middleware('AuthCheck')->name('index');
Route::get('/mail/{id}', 'AdminController@admin_mail_page')->middleware('AuthCheck')->name('admin_mail_page');
Route::post('/send_email', 'AdminController@send_email')->middleware('AuthCheck')->name('admin_send_email');

