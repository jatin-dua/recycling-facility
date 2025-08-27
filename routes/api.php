<?php

use App\Http\Controllers\FacilityController;
use App\Http\Controllers\FacilityMaterialController;
use App\Http\Controllers\MaterialController;
use Illuminate\Support\Facades\Route;

Route::apiResource('facilities', FacilityController::class);
Route::apiResource('materials', MaterialController::class);

Route::controller(FacilityMaterialController::class)->group(function() {
    Route::post('/facilities/{facility}/materials/{material}', [FacilityMaterialController::class, 'attach']);
    Route::get('/facilities/{facility}/materials', [FacilityMaterialController::class, 'listMaterials']);
});