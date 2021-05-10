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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/authors/index', [App\Http\Controllers\AuthorController::class, 'index'])
->name('authors.index');

Route::get('/authors/create', [App\Http\Controllers\AuthorController::class, 'create'])
->name('authors.create');

Route::post('/authors/store', [App\Http\Controllers\AuthorController::class, 'store'])
->name('authors.store');
