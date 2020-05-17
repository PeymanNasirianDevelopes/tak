<?php

use Illuminate\Support\Facades\Route;


Route::get('/','IndexController@main');

Auth::routes();

Route::get('/app/cms/admin', 'HomeController@index')->name('home');
Route::resource('app/cms/admin/sliders','SliderController')->only('edit','update','index');
Route::resource('app/cms/admin/menus','MenuController');
Route::resource('app/cms/admin/projects','ProjectController');
Route::resource('app/cms/admin/submenus','SubMenuController');
Route::resource('app/cms/admin/fonts','FontController')->only('index');
Route::resource('app/cms/admin/about_us','AboutController');
Route::resource('app/cms/admin/feature','FeatureController');
Route::post('ajax/{method}','AjaxController@main');
