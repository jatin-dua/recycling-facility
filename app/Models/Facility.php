<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Facility extends Model
{
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'last_update_date';

    protected $fillable = [
        'business_name',
        'street_address'
    ];

    /**
     * The materials that belong to the facility.
     * @return BelongsToMany<Material, Facility, \Illuminate\Database\Eloquent\Relations\Pivot>
     */
    public function materials(): BelongsToMany
    {
        return $this->belongsToMany(Material::class);
    }
}
