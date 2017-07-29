<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
 Route::get('/x', function () {
     return view('welcome');
}); //main start

//main
Route::get('/','MemberController@MemberLogin');
//main

//register
route::get('/register','MemberController@register');
route::post('/register2','MemberController@register2');
//register

//route::get('/home','MemberController@Home');
route::get('/home/{username}','MemberController@Home');


//Login
route::post('/login2','MemberController@login2');
//Login

//logout
route::get('/logout','MemberController@logout');
//logout

//order view
Route::get('order/view/{id}','AdminOrderController@view');
//order view

Route::get('home/{username}/price_date','PriceDateController@Price');
