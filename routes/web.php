<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});
Route::get('/signup', function () {
    return view('default');
})->name('signup');
Route::get('/homepage', [RegisterController::class,'homepage'])->name('homepage');
Route::get('/login', [RegisterController::class,'login'])->name('login');
Route::get('/dashboard', [RegisterController::class,'dashboard'])->name('dashboard');
Route::get('/contact', [RegisterController::class,'contact'])->name('contact');
Route::get('/timeline', [RegisterController::class,'timeline'])->name('timeline');