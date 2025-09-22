<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\CalculatorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculator', [CalculatorController::class, 'index']);
Route::post('/calculator', [CalculatorController::class, 'calculate'])->name('calculator.calculate');

