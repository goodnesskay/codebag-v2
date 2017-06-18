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


Route::group(['middleware' => ['web']], function () {

    Auth::routes();

    Route::get('/home', 'HomeController@index');

    Route::get('/', [
        'uses'=>'FrontEndController@landing',
        'as'=>'/'
    ]);

    Route::get('/pitch-your-idea', [
        'uses'=>'FrontEndController@pitchYourIdea',
        'as'=>'/pitch-your-idea'
    ]);

    //contact
    Route::get('/contact',[
        'uses'=>'FrontEndController@contact',
        'as'=>'contact'
    ]);

    //faq
    Route::get('/faq',[
        'uses'=>'FrontEndController@faq',
        'as'=>'faq'
    ]);

    //404 page
    Route::get('/404', function () {
        return view('404');
    });





});


