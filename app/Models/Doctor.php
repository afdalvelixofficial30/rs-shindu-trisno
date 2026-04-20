<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Doctor extends Model
{
    protected $fillable = [
        'poliklinik_id',
        'name',
        'specialty',
        'photo',
        'schedule_text',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function poliklinik(): BelongsTo
    {
        return $this->belongsTo(Poliklinik::class);
    }

    public function getPhotoUrlAttribute(): string
    {
        return $this->photo ? asset('assets/images/doctors/' . $this->photo) : asset('assets/images/default-doctor.png');
    }
}
