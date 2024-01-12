<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArrayDataController;

Route::get('/', [ArrayDataController::class, 'index']);