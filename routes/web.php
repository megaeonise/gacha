<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GachaController;

Route::get('/', [DashboardController::class, 'index']) ;

Route::get('/roll', [GachaController::class, 'index']) ;
