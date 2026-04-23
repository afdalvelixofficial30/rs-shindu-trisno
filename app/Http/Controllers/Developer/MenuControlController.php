<?php

namespace App\Http\Controllers\Developer;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class MenuControlController extends Controller
{
    public function index()
    {
        $menus = [
            'dashboard' => 'Dashboard Utama',
            'polikliniks' => 'Daftar Poliklinik',
            'doctors' => 'Dokter Spesialis',
            'posts' => 'Berita & Artikel',
            'pamphlet' => 'Pop-Up Jadwal (Pamflet)',
            'profile' => 'Profil Rumah Sakit',
        ];

        $statuses = Setting::where('group', 'Operasional')->pluck('value', 'key');

        return view('developer.menu_control', compact('menus', 'statuses'));
    }

    public function update(Request $request)
    {
        $menuKey = $request->input('menu');
        $status = $request->input('status');

        Setting::updateOrCreate(
            ['key' => $menuKey, 'group' => 'Operasional'],
            ['value' => $status]
        );

        return response()->json(['success' => true]);
    }
}
