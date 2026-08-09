<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



Route::get('/', function () {
    return view('home');
});
Route::get('/fishermanform', [PageController::class, 'fishermanform'])->name('fishermanform');
Route::get('/farmerform', [PageController::class, 'farmerform'])->name('farmerform');
Route::get('/marketform', [PageController::class, 'marketform'])->name('marketform');
Route::get('/industrialform', [PageController::class, 'industrialform'])->name('industrialform');
Route::get('/cowboyform', [PageController::class, 'cowboyform'])->name('cowboyform');
