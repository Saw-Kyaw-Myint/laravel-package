<?php

use Illuminate\Support\Facades\Route;
use LP\Calculator\CalculatorController;

Route::get('calculator', function () {
    echo "calculator pakage";
});

Route::get('add/{a}/{b}', [CalculatorController::class, 'add']);
Route::get('substarct/{a}/{b}', [CalculatorController::class, 'substarct']);
