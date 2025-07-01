<?php

namespace App\Http\Controllers;

use App\Models\Surveyor ;
use Illuminate\Http\Request;

class SurveyorController extends Controller
{
    public function index()
    {
        // Mengambil semua data Surveyor 
        $Surveyor  = Surveyor ::all();
        
        // Debug statement untuk memeriksa data
        // dd($Surveyor ); // Uncomment ini jika ingin melihat data yang diambil
        
        return view('surveyor.index', compact('surveyor'));
    }

    public function create()
    {
        
        return view('Surveyor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_surveyor'          => 'required',
            'surveyor_name'        => 'required',
            'phone_number'         => 'required',
            'email'                => 'required',
			'address'              => 'required',
            'license_number'       => 'required',
            'specialty'            => 'required',
            'status'               => 'required',
            'created_at'           => 'required',
            'update_at'            => 'required',
        ]);

        // Menyimpan data Surveyor 
        $surveyor  = Surveyor ::create($request->all());

        // Debug statement untuk memeriksa data yang baru saja ditambahkan
        // dd($Surveyor ); // Uncomment ini jika ingin melihat data yang disimpan

        return redirect()->route('surveyor.index')
            ->with('success', 'Surveyor  berhasil ditambahkan.');
    }

    public function show(surveyor  $surveyor )
    {
        return view('surveyor.show', compact('surveyor'));
    }

    public function edit(surveyor  $surveyor )
    {
        return view('surveyor.edit', compact('surveyor'));
    }

    public function update(Request $request, surveyor  $surveyor )
    {
        $request->validate([
            'id' 			        => 'required',
            'name' 		            => 'required',
            'phone_number' 			=> 'required',
            'email' 		        => 'required',
			'address' 				=> 'required',
            'license_number' 		=> 'required',
            'specialty' 		    => 'required',
            'status' 		        => 'required',
            'created_at' 		    => 'required',
            'update_at' 		    => 'required',
        ]);

        $surveyor ->update($request->all());

        return redirect()->route('surveyor.index')
            ->with('success', 'Surveyor  berhasil diupdate.');
    }

    public function destroy(Surveyor  $Surveyor )
    {
        $Surveyor ->delete();

        return redirect()->route('surveyor.index')
            ->with('success', 'Surveyor  berhasil dihapus.');
    }
}
