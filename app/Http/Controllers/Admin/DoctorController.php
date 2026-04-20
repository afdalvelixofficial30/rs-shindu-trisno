<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Poliklinik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $query = Doctor::with('poliklinik')->latest();

        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('specialty', 'like', '%' . $request->search . '%');
        }

        $doctors = $query->paginate(10);
        return view('admin.doctors.index', compact('doctors'));
    }

    public function create()
    {
        $polikliniks = Poliklinik::orderBy('name')->get();
        return view('admin.doctors.create', compact('polikliniks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'poliklinik_id' => 'required|exists:polikliniks,id',
            'specialty' => 'required|string',
            'schedule_text' => 'required|string',
            'photo' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('assets/images/doctors'), $imageName);
            $data['photo'] = $imageName;
        }

        Doctor::create($data);

        return redirect()->route('admin.doctors.index')->with('success', 'Data dokter berhasil ditambahkan.');
    }

    public function edit(Doctor $doctor)
    {
        $polikliniks = Poliklinik::orderBy('name')->get();
        return view('admin.doctors.edit', compact('doctor', 'polikliniks'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'name' => 'required|string',
            'poliklinik_id' => 'required|exists:polikliniks,id',
            'specialty' => 'required|string',
            'schedule_text' => 'required|string',
            'photo' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($doctor->photo && File::exists(public_path('assets/images/doctors/' . $doctor->photo))) {
                File::delete(public_path('assets/images/doctors/' . $doctor->photo));
            }

            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('assets/images/doctors'), $imageName);
            $data['photo'] = $imageName;
        }

        $doctor->update($data);

        return redirect()->route('admin.doctors.index')->with('success', 'Data dokter berhasil diperbarui.');
    }

    public function destroy(Doctor $doctor)
    {
        if ($doctor->photo && File::exists(public_path('assets/images/doctors/' . $doctor->photo))) {
            File::delete(public_path('assets/images/doctors/' . $doctor->photo));
        }

        $doctor->delete();

        return redirect()->route('admin.doctors.index')->with('success', 'Data dokter berhasil dihapus.');
    }
}
