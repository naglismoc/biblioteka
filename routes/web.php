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

    // Route::get('/index', 'UserController@index')->name('user.index');

    Route::get('/', function () {
        return view('welcome');
    });

Route::group(['middleware' => ['auth']], function () {

    Route::group(['prefix' => 'authors'], function(){
        Route::get('/index', [App\Http\Controllers\AuthorController::class, 'index'])->name('authors.index');
        Route::get('/create', [App\Http\Controllers\AuthorController::class, 'create'])->name('authors.create');
        Route::post('/store', [App\Http\Controllers\AuthorController::class, 'store'])->name('authors.store');
        Route::get('/edit/{author}', [App\Http\Controllers\AuthorController::class, 'edit'])->name('authors.edit');
        Route::post('/update/{author}', [App\Http\Controllers\AuthorController::class, 'update'])->name('authors.update');
        Route::post('/destroy/{author}', [App\Http\Controllers\AuthorController::class, 'destroy'])->name('authors.destroy');
    });


    Route::group(['prefix' => 'books'], function(){
        Route::get('/index', [App\Http\Controllers\BookController::class, 'index'])->name('books.index');
        Route::get('/create', [App\Http\Controllers\BookController::class, 'create'])->name('books.create');
        Route::post('/store', [App\Http\Controllers\BookController::class, 'store'])->name('books.store');
        Route::get('/edit/{book}', [App\Http\Controllers\BookController::class, 'edit'])->name('books.edit');
        Route::post('/update/{book}', [App\Http\Controllers\BookController::class, 'update'])->name('books.update');
        Route::post('/destroy/{book}', [App\Http\Controllers\BookController::class, 'destroy'])->name('books.destroy');
    });

});
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
