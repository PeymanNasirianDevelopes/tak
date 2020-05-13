<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/','IndexController@main');

Auth::routes();

Route::get('/app/cms/admin', 'HomeController@index')->name('home');
Route::resource('app/cms/admin/sliders','SliderController')->only('edit','update','index');
Route::resource('app/cms/admin/aboutus','AboutUsController')->only('edit','update','index');
Route::post('ajax/{method}','AjaxController@main');
