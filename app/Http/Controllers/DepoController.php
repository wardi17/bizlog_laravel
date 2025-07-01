<?php

namespace App\Http\Controllers;

use App\Models\Depo;
use Illuminate\Http\Request;

class DepoController extends Controller
{
    public function index()
    {
        // Mengambil semua data Depo
        $depo = Depo::all();

        // Debug statement untuk memeriksa data
        // dd($depo); // Uncomment ini jika ingin melihat data yang diambil

        return view('conten_app.conten_main.depo.index', compact('depo'));
    }

    public function create()
    {
        return view('conten_app.conten_main.depo.create');
    }

    public function store(Request $request)
    {
        // Validasi data inputan
        $validated = $request->validate([
            'nama_depo'            => 'required',
            'kapasitas'            => 'required|integer',
            'google_map_link'      => 'nullable|url',
            'latitude'             => 'required|numeric',
            'longitude'            => 'required|numeric',
            'create_by'            => 'required|string|max:100',
        ]);

        // Simpan data ke database
        $depo = Depo::create($validated);

        // Debugging (Opsional) untuk cek apakah data tersimpan
        // dd($depo);

        return redirect()->route('depo.index')
            ->with('success', 'Depo berhasil ditambahkan.');
    }

    public function show(Depo $Depo)
    {
        return view('conten_app.conten_main.depo.show', compact('Depo'));
    }

    public function edit(Depo $Depo)
    {
        return view('conten_app.conten_main.depo.edit', compact('Depo'));
    }

    public function update(Request $request, Depo $Depo)
    {
        $request->validate([
            'nama_depo'            => 'required',
            'kapasitas'            => 'required|integer',
            'google_map_link'      => 'nullable|url',
            'latitude'             => 'required|numeric',
            'longitude'            => 'required|numeric',
            'update_by'            => 'required|string|max:100',
        ]);

        $Depo->update($request->all());

        return redirect()->route('depo.index')
            ->with('success', 'Depo berhasil diperbarui.');
    }

    public function destroy(Depo $Depo)
    {
        $Depo->delete();

        return redirect()->route('depo.index')
            ->with('success', 'Depo berhasil dihapus.');
    }
}
