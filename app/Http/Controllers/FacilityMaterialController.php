<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Material;

class FacilityMaterialController extends Controller
{
    public function attach(Facility $facility, Material $material)
    {
        $facility->materials()->attach($material->id);
        return response()->json(['message' => 'Attached']);
    }

    public function listMaterials(Facility $facility)
    {
        return $facility->materials;
    }
}
