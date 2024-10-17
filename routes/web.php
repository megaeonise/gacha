<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GachaController;
use App\Http\Controllers\NoteController;

Route::get('/', [DashboardController::class, 'index']) ;

Route::get('/roll', [GachaController::class, 'index']) ;

Route::get('/note', [NoteController::class, 'index']) ;
