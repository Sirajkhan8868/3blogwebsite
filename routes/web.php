<?php

use App\Http\Controllers\Auth\BlogController;
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

Route::get('/', [BlogController::class, 'home'])->name('home');
Route::get('/header', [BlogController::class, 'header'])->name('header');
Route::get('/offer', [BlogController::class, 'offer'])->name('offer');
Route::get('/bookssnow', [BlogController::class, 'booksnow'])->name('booksnow');
Route::get('/contact', [BlogController::class, 'contact'])->name('contact');

