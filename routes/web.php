<?php

use App\Http\Controllers\CountriesController;
use Illuminate\Support\Facades\Route;

Route::get('countries/', [CountriesController::class, 'show']);
