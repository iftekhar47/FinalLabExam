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

Route::get('/', function () {
    return redirect('/home');
});
route::get('/login', ['uses'=>'LoginController@index']);
Route::post('/login', ['uses'=>'LoginController@verify']);

Route::get('/register', ['uses'=>'RegistrationController@index']);
Route::post('/register', ['uses'=>'RegistrationController@register']);

Route::get('/admin', ['uses'=>'AdminController@index']);

Route::get('/admin/register', ['uses'=>'AdminController@regIndex']);
Route::post('/admin/register', ['uses'=>'AdminController@register']);
Route::get('/admin/delete/{id}', 'adminController@deleteEmp');

Route::get('/home', ['uses'=>'HomeController@index']);
