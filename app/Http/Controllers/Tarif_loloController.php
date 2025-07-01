<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarif_lolo;

class Tarif_loloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarif_lolo = Tarif_lolo::all();
        return view('conten_app.conten_main.tarif_lolo.index', compact('tarif_lolo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('conten_app.conten_main.tarif_lolo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_tarif_lolo'   => 'nullable',
            'id_depo'         => 'nullable',
            'lolo_tipe'       => 'nullable|numeric',
            'id_pelayaran'    => 'nullable|string|max:255',
            'size'            => 'nullable|string|max:255',
            'price_lolo'      => 'nullable|string|max:255',
            'lolo_date'       => 'nullable|string|max:255',
            'valuta'          => 'nullable|string|max:255',
            'whosing_diterze' => 'nullable|string|max:255',
            'whosing_chemical'=> 'nullable|string|max:255',
            'whosing_water'   => 'nullable|string|max:255',
            'administration'  => 'nullable|string|max:255',
            'Create_By'       => 'nullable|string|max:255',
            'Create_Date'     => 'nullable|date',
            'Update_By'       => 'nullable|string|max:255',
            'Last_Update'     => 'nullable|date',
        ]);

        Tarif_lolo::create($request->all());

        return redirect()->route('conten_app.conten_main.tarif_lolo.index')
                         ->with('success', 'Tarif lolo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tarif_lolo = Tarif_lolo::findOrFail($id);
        return view('conten_app.conten_main.tarif_lolo.show', compact('tarif_lolo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tarif_lolo = Tarif_lolo::findOrFail($id);
        return view('conten_app.conten_main.tarif_lolo.edit', compact('tarif_lolo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_tarif_lolo'   => 'nullable',
            'id_depo'         => 'nullable',
            'lolo_tipe'       => 'nullable|numeric',
            'id_pelayaran'    => 'nullable|string|max:255',
            'size'            => 'nullable|string|max:255',
            'price_lolo'      => 'nullable|string|max:255',
            'lolo_date'       => 'nullable|string|max:255',
            'valuta'          => 'nullable|string|max:255',
            'whosing_diterze' => 'nullable|string|max:255',
            'whosing_chemical'=> 'nullable|string|max:255',
            'whosing_water'   => 'nullable|string|max:255',
            'administration'  => 'nullable|string|max:255',
            'Create_By'       => 'nullable|string|max:255',
            'Create_Date'     => 'nullable|date',
            'Update_By'       => 'nullable|string|max:255',
            'Last_Update'     => 'nullable|date',
        ]);

        $tarif_lolo = Tarif_lolo::findOrFail($id);
        $tarif_lolo->update($request->all());

        return redirect()->route('conten_app.conten_main.tarif_lolo.index')
                         ->with('success', 'Tarif lolo updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tarif_lolo = Tarif_lolo::findOrFail($id);
        $tarif_lolo->delete();

        return redirect()->route('conten_app.conten_main.tarif_lolo.index')
                         ->with('success', 'Tarif lolo deleted successfully.');
    }
}
