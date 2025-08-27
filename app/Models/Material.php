<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Material extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
     public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    /**
     * The facilities that belong to the material.
     * @return BelongsToMany<Facility, Material, \Illuminate\Database\Eloquent\Relations\Pivot>
     */
    public function facilities(): BelongsToMany
    {
        return $this->belongsToMany(Facility::class);
    }
}
