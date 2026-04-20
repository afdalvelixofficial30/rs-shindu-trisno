<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PamphletJadwal;
use Illuminate\Support\Facades\File;

class PamphletController extends Controller
{
    public function index()
    {
        $pamphlets = PamphletJadwal::latest()->get();
        return view('admin.pamphlet', compact('pamphlets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/images/jadwal'), $imageName);

        PamphletJadwal::create([
            'image_path' => 'assets/images/jadwal/' . $imageName,
            'is_active' => PamphletJadwal::count() === 0 ? true : false,
        ]);

        return back()->with('success', 'Pamflet berhasil diupload.');
    }

    public function activate($id)
    {
        PamphletJadwal::query()->update(['is_active' => false]);
        PamphletJadwal::findOrFail($id)->update(['is_active' => true]);

        return back()->with('success', 'Pamflet ini diaktifkan untuk Pop Up.');
    }

    public function destroy($id)
    {
        $pamphlet = PamphletJadwal::findOrFail($id);
        
        if (File::exists(public_path($pamphlet->image_path))) {
            File::delete(public_path($pamphlet->image_path));
        }
        
        $pamphlet->delete();
        return back()->with('success', 'Pamflet berhasil dihapus.');
    }
}
