<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/export-pdf', [HomeController::class, 'exportPDF'])->name('exportPDF');


Route::get('/send-message', [HomeController::class, 'sendMessage'])->name('sendMessage');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
