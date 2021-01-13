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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('calculatoare', function () {
    return view('calculatoare');
});
Route::get('preturi', function () {
    return view('preturi');
});
Route::get('reviewuri', function () {
    return view('reviewuri');
});
Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/calculatoare', [App\Http\Controllers\CalculatoareController::class,'index'])->name('calculatoare');
Route::get('/preturi', [App\Http\Controllers\PreturiController::class,'index'])->name('preturi');
Route::get('/reviewuri', [App\Http\Controllers\ReviewuriController::class,'index'])->name('reviewuri');

