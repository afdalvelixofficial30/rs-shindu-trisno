<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HospitalProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HospitalProfileController extends Controller
{
    public function index()
    {
        $profile = HospitalProfile::first();
        return view('admin.profile.index', compact('profile'));
    }

    public function update(Request $request)
    {
        $profile = HospitalProfile::first();
        
        $request->validate([
            'karumkit_name' => 'required|string',
            'karumkit_rank' => 'required|string',
            'welcome_message' => 'required|string',
            'visi' => 'required|string',
            'hospital_type' => 'required|string',
            'accreditation' => 'required|string',
            'certification' => 'required|string',
        ]);

        $data = $request->only([
            'karumkit_name', 'karumkit_rank', 'welcome_message', 'visi', 
            'hospital_type', 'accreditation', 'certification'
        ]);

        // Handing missions as array from textarea (one line per mission)
        if ($request->has('misi_raw')) {
            $data['misi'] = array_filter(explode("\n", str_replace("\r", "", $request->misi_raw)));
        }

        // Motto (one line per motto)
        if ($request->has('motto_raw')) {
            $data['motto'] = array_filter(explode("\n", str_replace("\r", "", $request->motto_raw)));
        }

        // Photo Upload
        if ($request->hasFile('karumkit_photo')) {
            $imageName = 'karumkit_' . time() . '.' . $request->karumkit_photo->extension();
            $request->karumkit_photo->move(public_path('assets/images'), $imageName);
            $data['karumkit_photo'] = 'assets/images/' . $imageName;
        }

        // Organization Chart Upload
        if ($request->hasFile('organization_chart')) {
            $imageName = 'bagan_' . time() . '.' . $request->organization_chart->extension();
            $request->organization_chart->move(public_path('assets/images'), $imageName);
            $data['organization_chart'] = 'assets/images/' . $imageName;
        }

        $profile->update($data);

        return redirect()->back()->with('success', 'Profil Rumah Sakit berhasil diperbarui!');
    }
}
