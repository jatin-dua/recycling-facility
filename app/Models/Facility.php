<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'last_update_date';

    protected $fillable = [
        'business_name',
        'street_address'
    ];
}
