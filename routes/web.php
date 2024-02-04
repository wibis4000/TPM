<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
Route::get('/admin', [RegisterController::class,'admin'])->name('admin');
Route::get('/admin2', [RegisterController::class,'admin2'])->name('admin2');
Route::get('/dashboard', [RegisterController::class,'dashboard'])->name('dashboard');
Route::get('/contact', [RegisterController::class,'contact'])->name('contact');
Route::get('/timeline', [RegisterController::class,'timeline'])->name('timeline');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');