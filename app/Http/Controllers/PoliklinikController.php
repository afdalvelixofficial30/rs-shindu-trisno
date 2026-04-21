<?php

namespace App\Http\Controllers;

use App\Models\Poliklinik;
use Illuminate\Http\Request;

class PoliklinikController extends Controller
{
    public function index()
    {
        $polikliniks = Poliklinik::with(['doctors' => function ($query) {
            $query->where('is_active', true);
        }])->where('is_active', true)->get();
        
        return view('pages.jadwal_poliklinik', compact('polikliniks'));
    }
}
