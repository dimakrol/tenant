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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aaa', function () {
    dd('here');
    $website   = \Hyn\Tenancy\Facades\TenancyFacade::website();
    $h = app(\Hyn\Tenancy\Environment::class)->hostname();
//    dd($website, $h->fqdn);
});
Route::group(['middleware' => 'tenancy.enforce'], function () {
    Auth::routes();
});
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
