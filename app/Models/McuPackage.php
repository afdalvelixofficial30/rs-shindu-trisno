<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class McuPackage extends Model
{
    protected $table = 'mcu_packages';

    protected $fillable = ['name', 'description', 'price', 'is_active'];

    protected $casts = [
        'is_active' => 'boolean',
        'price'     => 'decimal:2',
    ];

    public function getFormattedPriceAttribute(): string
    {
        return $this->price
            ? 'Rp ' . number_format($this->price, 0, ',', '.')
            : 'Hubungi Kami';
    }
}
