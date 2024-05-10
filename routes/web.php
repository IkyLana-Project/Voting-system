<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VotingController;

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
Route::get('/', [VotingController::class, 'welcome'])->name('welcome');
Route::get('/index', [VotingController::class, 'index'])->name('index');
Route::post('/vote', [VotingController::class, 'vote'])->name('vote');
Route::get('/result', [VotingController::class, 'result'])->name('result');
