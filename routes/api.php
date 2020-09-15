<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/phonebook/{any}', function () {
    return view('phonebook');
});
Route::resource('/phonebook',"PhonebookController");
Route::post('/phonebook/getdata','PhonebookController@getdata');
Route::post('/phonebook/get/{phonebook}','PhonebookController@getit');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
