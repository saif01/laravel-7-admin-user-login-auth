<?php

use Illuminate\Support\Facades\Route;

//User Login
Route::namespace('User')->group(function(){
    Route::get('/', 'LoginController@Index')->name('user.login');
    Route::post('/login-action', 'LoginController@LoginAction')->name('user.login.action');
});

//Admin Login
Route::namespace('Admin')->prefix('admin')->group(function(){
    Route::get('/', 'LoginController@Index')->name('admin.login');
    Route::post('/login-action', 'LoginController@LoginAction')->name('admin.login.action');
});


Auth::routes();
//User Dashboard
Route::get('/home', 'HomeController@index')->name('home');








//Admin Section Start
Route::middleware('admin')->namespace('Admin')->prefix('admin')->group(function(){

    Route::get('/dashboard', 'LoginController@Dashboard')->name('admin.dashboard');
    //Logout
    Route::get('/logout', 'LoginController@Logout')->name('admin.logout');

});


