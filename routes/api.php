<?php

use App\Http\Controllers\FacilityController;
use Illuminate\Support\Facades\Route;

Route::apiResource('facilities', FacilityController::class);