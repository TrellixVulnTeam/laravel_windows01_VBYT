<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\HelloController;


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

//Route::get('/','SampleController@index');


Route::get('/', function () {
    return view('welcome');
    //return 'Hello World';
});

Route::get('/sample', [SampleController::class, 'showPage']);
//Route::get('/hello', 'HelloController@index');
Route::get('/hello', [HelloController::class, 'index'])->name('hello');
Route::get('/hello/{id}', [HelloController::class, 'index'])->where('id','[0-9]+');
Route::get('/hello/other', [HelloController::class, 'other']);
