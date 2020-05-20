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
Route::resource('app/cms/admin/tabs','TabController');
Route::resource('app/cms/admin/testimonials','TestimonialController');
Route::resource('app/cms/admin/features_2','FeatureSectionController');
Route::resource('app/cms/admin/feature','FeatureController')->only('index','edit','update');
Route::resource('app/cms/admin/feature_task','FeatureTaskController')->only('index','edit','update');
Route::resource('app/cms/admin/make_dream','MakeDreamController')->only('index','edit','update');
Route::resource('app/cms/admin/circle_counter','CircleCounterController')->only('index','edit','update');
Route::post('ajax/{method}','AjaxController@main');
