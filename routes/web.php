<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LeaderController;

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
Route::get('/', [LeaderController::class,'homepage'])->name('homepage');
Route::get('/register', [GroupController::class,'register'])->name('register');
Route::post('/signup',[GroupController::class,'signup'])->name('signup');
Route::get('/leader', [GroupController::class,'registerLeader'])->name('registerLeader');
Route::post('/submitLeader',[LeaderController::class,'submitLeader'])->name('submitLeader');

