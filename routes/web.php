<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Students;

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
    return view('login-page');
});

Route::post('/User_homepage', 'StudentController@login');
Route::get('/User_homepage', 'StudentController@displayData');
Route::get('/register_page', 'StudentController@register_page');
Route::post('/', 'StudentController@InsertData');
Route::get('/update_process/{id}', 'StudentController@update');
Route::post('/update_process/{id}', 'StudentController@updateRequest');
Route::get('/delete/{id}', 'StudentController@delete');

/*
Route::get('/update_process/{studID}', 'StudentController@fetchID');


Route::get('/register_page', [Students::class, 'index'])->name('register_page');
Route::post('register', [Students::class, 'InsertData'])->name('register_page.InsertData');
*/



/*

Route::view('register_page', 'register_page');

Route::POST('register', 'Students@InsertData');
*/
/*
Route::get('/register_page', function () {
    return view('register_page');
});
*/

