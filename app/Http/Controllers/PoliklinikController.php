<?php

namespace App\Http\Controllers;

use App\Models\Poliklinik;
use Illuminate\Http\Request;

class PoliklinikController extends Controller
{
    public function index()
    {
        $polikliniks = Poliklinik::with('doctors')->get()->groupBy('shift');
        
        return view('pages.jadwal_poliklinik', compact('polikliniks'));
    }
}
