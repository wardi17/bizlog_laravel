<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        // Mengambil semua data kendaraan
        $kendaraans = Kendaraan::all();
        
        // Debug statement untuk memeriksa data
        // dd($kendaraans); // Uncomment ini jika ingin melihat data yang diambil
        
        return view('conten_app.conten_main.kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        
        return view('conten_app.conten_main.kendaraan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_plat' => 'required',
            'jenis_kendaraan' => 'required',
            'waktu_masuk' => 'required',
            'waktu_keluar' => 'nullable',
            'biaya_parkir' => 'nullable|numeric'
        ]);

        // Menyimpan data kendaraan
        $kendaraan = Kendaraan::create($request->all());

        // Debug statement untuk memeriksa data yang baru saja ditambahkan
        // dd($kendaraan); // Uncomment ini jika ingin melihat data yang disimpan

        return redirect()->route('conten_app.conten_main.kendaraan.index')
            ->with('success', 'Kendaraan berhasil ditambahkan.');
    }

    public function show(Kendaraan $kendaraan)
    {
        return view('conten_app.conten_main.kendaraan.show', compact('kendaraan'));
    }

    public function edit(Kendaraan $kendaraan)
    {
        return view('conten_app.conten_main.kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, Kendaraan $kendaraan)
    {
        $request->validate([
            'nomor_plat' => 'required',
            'jenis_kendaraan' => 'required',
            'waktu_masuk' => 'required',
            'waktu_keluar' => 'nullable',
            'biaya_parkir' => 'nullable|numeric'
        ]);

        $kendaraan->update($request->all());

        return redirect()->route('kendaraan.index')
            ->with('success', 'Kendaraan berhasil diupdate.');
    }

    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();

        return redirect()->route('kendaraan.index')
            ->with('success', 'Kendaraan berhasil dihapus.');
    }
}
