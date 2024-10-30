<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GachaController;
use App\Http\Controllers\NoteController;

Route::redirect('/', '/note')->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/', [DashboardController::class, 'index']) ;

    Route::get('/roll', [GachaController::class, 'index'])->name('gacha.index');
    Route::get('/roll/create', [GachaController::class, 'create'])->name('gacha.create');

    Route::resource('note', NoteController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
