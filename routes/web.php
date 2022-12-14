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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/blog', function (){
   return view('blog');
})->name('blog');

Route::get('/movies', function (){
    return view('movies');
})->name('movies');

Route::get('/search',[App\Http\Controllers\SearchController::class, 'index'])->name('search');
Route::post('/search',[App\Http\Controllers\SearchController::class, 'store'])->name('search.store');

Route::get('details/');
