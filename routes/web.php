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
Route::get('/hr', [BlogController::class, 'hr'])->name('hr');
Route::get('/view', [BlogController::class, 'view'])->name('view');
Route::get('/pm', [BlogController::class, 'pm'])->name('pm');
Route::get('/cm', [BlogController::class, 'cm'])->name('cm');
Route::get('/lm', [BlogController::class, 'lm'])->name('lm');
Route::get('/af', [BlogController::class, 'af'])->name('af');
Route::get('/as', [BlogController::class, 'as'])->name('as');
Route::get('/et', [BlogController::class, 'et'])->name('et');
Route::get('/bm', [BlogController::class, 'bm'])->name('bm');









