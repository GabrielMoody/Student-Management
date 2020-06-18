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
    return view('auth.login');
})->middleware('guest');

Auth::routes(['verify' => true]);

Route::get('/dashboard', 'HomeController@index');

// Students
Route::resource('students', 'StudentsController');
Route::get('/students', 'StudentsController@search');

// Profile
Route::get('/profile', 'ProfileController@index');
Route::patch('/profile', 'ProfileController@update');

// Change Password
Route::get('/change-password', 'ProfileController@changePasswordView');
Route::patch('/change-password', 'ProfileController@changePassword');
