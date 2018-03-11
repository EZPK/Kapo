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
    return view('welcome');
});


Route::get('/timer', function () {


    $timers = DB::table("timer")->latest()->get();

    return view('timer.index', compact('timers'));
});



Route::get('/timer/{timer}', function ($id) {

    $timers = DB::table("timer")->find($id);

    return view('timer.show', compact('timers'));
}); 