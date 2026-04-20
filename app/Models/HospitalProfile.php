<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HospitalProfile extends Model
{
    protected $guarded = [];

    protected $casts = [
        'misi' => 'array',
        'motto' => 'array',
    ];
}
