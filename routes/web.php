<?php

use App\Race;
use App\Religion;
use App\Status;
use App\School;
use App\Registration;
use App\Gender;
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
    return view('welcome');
    //return Gender::all();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registrations/approve/{id}','RegistrationController@approve')->name('registration.approve');
Route::get('/registrations/reject/{id}','RegistrationController@reject')->name('registration.reject');
Route::get('/registrations/edit/{id}','RegistrationController@edit')->name('registration.edit');
Route::put('/registrations/update','RegistrationController@update')->name('registration.update');
Route::resource('/registrations', 'RegistrationController');
