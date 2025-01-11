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
Route::get('/christmas', [BlogController::class, 'christmas'])->name('christmas');
Route::get('/bookssnow', [BlogController::class, 'booksnow'])->name('booksnow');
Route::get('/contact', [BlogController::class, 'contact'])->name('contact');
Route::get('/human', [BlogController::class, 'human'])->name('human');
Route::get('/view', [BlogController::class, 'view'])->name('view');
Route::get('/project', [BlogController::class, 'project'])->name('project');
Route::get('/construction', [BlogController::class, 'construction'])->name('construction');
Route::get('/leadership', [BlogController::class, 'leadership'])->name('leadership');
Route::get('/accounting', [BlogController::class, 'accounting'])->name('accounting');
Route::get('/admin', [BlogController::class, 'admin'])->name('admin');
Route::get('/education', [BlogController::class, 'education'])->name('education');
Route::get('/business', [BlogController::class, 'business'])->name('business');









