<?php

use App\Http\Controllers\Admin\BranchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('cabang', BranchController::class);