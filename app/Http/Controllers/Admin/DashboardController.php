<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Doctor;
use App\Models\Poliklinik;
use App\Models\Post;
use App\Models\McuPackage;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'poliklinik' => Poliklinik::count(),
            'doctors'    => Doctor::count(),
            'posts'      => Post::count(),
            'mcu'        => McuPackage::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
