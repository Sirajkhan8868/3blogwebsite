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

Route::get('/beauty', [BlogController::class, 'beauty'])->name('beauty');
Route::get('/childphychology', [BlogController::class, 'childphychology'])->name('childphychology');
Route::get('/supply', [BlogController::class, 'supply'])->name('supply');
Route::get('/workplace', [BlogController::class, 'workplace'])->name('workplace');

Route::get('/phlebotmist', [BlogController::class, 'phlebotmist'])->name('phlebotmist');
Route::get('/level', [BlogController::class, 'level'])->name('level');

Route::get('/cyber', [BlogController::class, 'cyber'])->name('cyber');
Route::get('/health', [BlogController::class, 'health'])->name('health');
Route::get('/social', [BlogController::class, 'social'])->name('socail');



Route::get('/additional', [BlogController::class, 'additional'])->name('additional');
Route::get('/mandatory', [BlogController::class, 'mandatory'])->name('mandatory');
























