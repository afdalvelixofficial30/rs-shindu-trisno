<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Poliklinik;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PoliklinikController extends Controller
{
    public function index()
    {
        $polikliniks = Poliklinik::withCount('doctors')->latest()->paginate(10);
        return view('admin.polikliniks.index', compact('polikliniks'));
    }

    public function create()
    {
        return view('admin.polikliniks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active'   => 'sometimes|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        $validated['is_active'] = $request->has('is_active');

        Poliklinik::create($validated);

        return redirect()->route('admin.polikliniks.index')->with('success', 'Poliklinik berhasil ditambahkan.');
    }

    public function edit(Poliklinik $poliklinik)
    {
        return view('admin.polikliniks.edit', compact('poliklinik'));
    }

    public function update(Request $request, Poliklinik $poliklinik)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active'   => 'sometimes|boolean',
        ]);

        if ($request->name !== $poliklinik->name) {
            $validated['slug'] = Str::slug($validated['name']);
        }
        $validated['is_active'] = $request->has('is_active');

        $poliklinik->update($validated);

        return redirect()->route('admin.polikliniks.index')->with('success', 'Update data poliklinik berhasil disave.');
    }

    public function destroy(Poliklinik $poliklinik)
    {
        $poliklinik->delete();
        return redirect()->route('admin.polikliniks.index')->with('success', 'Poliklinik berhasil dihapus.');
    }
}
