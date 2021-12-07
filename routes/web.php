<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Login_page;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| 
|
*/

Route::get('/', function ()
 {
    return view('login');


});

Route::get('registration', function () {   // to view registartion page
    return view('registration');
});


Route::post('add',[RegController::class,'RegData']); //to register user details
//Route::post('/update_form',[Login_page::class,'store']); to validate the update profile details

Route::view("login",'login');//to view login page
Route::view('profile','profile');//to show session value
Route::post('/login', 'App\Http\Controllers\Login_page@index');//to set session value
Route::get('profile','App\Http\Controllers\Login_page@show');//to set the session variable
Route::post('/edit_info',[Login_page::class,'edit_details']);//to navigate to edit info page
Route::post('/update_form',[Login_page::class,'update']);//to update user data
//Route::post('/login',[UserController::class,'displays']);//to update user data
//Route::post('profile','App\Http\Controllers\Login_page@show');//to set the session variable

