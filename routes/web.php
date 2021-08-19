<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternlistController;

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
    return view('index');
})->name('index');

Route::get('/create',[InternlistController::class, 'index']);
Route::get('create',[InternlistController::class, 'index']);


Route::get('/create', function () {
    return view('create');
})->name('create');

Route::get('/edit', function () {
    return view('edit');
})->name('edit');

Route::get('/show', function () {
    return view('show');
})->name('show');


Route::resource('internlists', InternlistController::class);


Route::get('/{any}', 'App\Http\Controllers\PagesController@index')->where('any', '.*');