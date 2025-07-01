<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bon_Bongkar;

class Bon_BongkarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bon_bongkar= Bon_Bongkar::all();
        return view('conten_app.conten_main.bon_bongkar.index', compact('bon_bongkar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('conten_app.conten_main.bon_bongkar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_bon_bongkar'=> 'nullable',
            'id_depo'       => 'nullable|string|max:255',
            'id_bar_code'   => 'nullable|string',
            'id_container'  => 'nullable|string|max:100',
            'id_pelayaran'  => 'nullable|date',
            'id_consignee'  => 'nullable|string|max:100',
            'id_driver'     => 'nullable|string|max:50',
            'id_vehicle'    => 'nullable|string|max:50',
            'date_in'       => 'nullable|date',
            'id_paydate'    => 'nullable|date',
            'remak'         => 'nullable|string|max:255',
            
        ]);

        Bon_Bongkar::create($request->all());

        return redirect()->route('conten_app.conten_main.bon_bongkar.index')
                         ->with('success', 'Order created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bon_bongkar = Bon_Bongkar::findOrFail($id);
        return view('conten_app.conten_main.bon_bongkar.show', compact('$bon_bongkar = Bon_Bongkar::findOrFail($id);
'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bon_bongkar = Bon_Bongkar::findOrFail($id);
        return view('conten_app.conten_main.bon_bongkar.edit', compact('$bon_bongkar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
            $request->validate([
            'id_bon_bongkar'=> 'nullable',
            'id_depo'       => 'nullable|string|max:255',
            'id_bar_code'   => 'nullable|string',
            'id_container'  => 'nullable|string|max:100',
            'id_pelayaran'  => 'nullable|date',
            'id_consignee'  => 'nullable|string|max:100',
            'id_driver'     => 'nullable|string|max:50',
            'id_vehicle'    => 'nullable|string|max:50',
            'date_in'       => 'nullable|date',
            'id_paydate'    => 'nullable|date',
            'remak'         => 'nullable|string|max:255',
            
        ]);

        $bon_bongkar = Bon_Bongkar::findOrFail($id);
        $bon_bongkar->update($request->all());

        return redirect()->route('conten_app.conten_main.bon_bongkar.index')
                         ->with('success', 'Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Bon_Bongkar::findOrFail($id);
        $item->delete();

        return redirect()->route('conten_app.conten_main.bon_bongkar.index')
            ->with('success', 'Bon Bongkar deleted successfully.');
    }
}
