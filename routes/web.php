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

//Route::get('/', function () {
//    return view('welcome');
//});

//ログアウト中のページ
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', 'Auth\LoginController@login')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/twitter', 'TwitterController@index');
});


//ログイン後のページ
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    //生徒のページ
    Route::get('/top', 'StudentController@index');
    Route::resource('posts', 'PostsController', ['only' => ['index', 'store', 'edit', 'destroy']]);
    Route::get('/reservation', 'StudentController@show');
    Route::get('/mylist', 'StudentController@mylist');

    //管理者しかいけないページ
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/chart', 'AdminController@show');
    //管理者しか利用者登録ができない仕様
    Route::get('/register', 'Auth\RegisterController@register');
    Route::post('/register', 'Auth\RegisterController@register');

    //登録完了しましたメッセージのみの画面でOK
    Route::get('/added', 'Auth\RegisterController@added');
});

Route::get('/ver', 'API\VerController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
