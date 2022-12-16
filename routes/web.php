<?php

use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('home');
});

Route::get('add','App\Http\Controllers\mystudentcontroller@addform');
Route::post('addprocess','App\Http\Controllers\mystudentcontroller@addformprocess');
Route::get('show','App\Http\Controllers\mystudentcontroller@showdata');
Route::get('delete/{id}','App\Http\Controllers\mystudentcontroller@deletedata');
Route::get('edit/{id}','App\Http\Controllers\mystudentcontroller@editdata');
Route::patch('updateprocess','App\Http\Controllers\mystudentcontroller@updatedata');

Route::resource('student', 'App\Http\Controllers\myrcontroller');
