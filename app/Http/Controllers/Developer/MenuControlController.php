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
            ['key' => 'public.home', 'label' => 'Website Utama (Landing Page)', 'route' => 'home'],
            ['key' => 'dashboard', 'label' => 'Dashboard Utama', 'route' => 'admin.dashboard.index'],
            ['key' => 'polikliniks', 'label' => 'Daftar Poliklinik', 'route' => 'admin.polikliniks.index'],
            ['key' => 'doctors', 'label' => 'Dokter Spesialis', 'route' => 'admin.doctors.index'],
            ['key' => 'posts', 'label' => 'Berita & Artikel', 'route' => 'admin.posts.index'],
            ['key' => 'pamphlet', 'label' => 'Pop-Up Jadwal (Pamflet)', 'route' => 'admin.pamphlet.index'],
            ['key' => 'profile', 'label' => 'Profil Rumah Sakit', 'route' => 'admin.profile.index'],
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
