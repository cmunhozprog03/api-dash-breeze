<?php

use App\Http\Controllers\Admin\DashController;
use Illuminate\Support\Facades\Route;

Route::get('', [DashController::class, 'index'])->name('dash.index');
