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
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    Route::group(['namespace' => 'Site'] , function() {
        Route::get('/', 'PagesController@index')->name('home.page');
        Route::get('about', 'PagesController@about')->name('about.page');
        Route::get('services' , 'PagesController@services')->name('service.page');
        Route::get('blogs' , 'PagesController@blogs')->name('blogs.page');
        Route::get('contact' , 'PagesController@contactUs')->name('contact.page');
    });
});

