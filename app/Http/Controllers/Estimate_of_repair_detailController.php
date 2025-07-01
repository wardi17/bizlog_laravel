<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estimate_of_repairdetail;

class Estimate_of_repairdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estimate_of_repair= Estimate_of_repairdetail::all();
        return view('conten_app.conten_main.estimate_of_repair_detail.index', compact('estimate_of_repair'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('conten_app.conten_main.estimate_of_repair_detail.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_detail_estimate_of_repair'      => 'nullable',
            'id_master_estimate_of_repair'      => 'nullable|string|max:255',
            'no'                                => 'nullable|string',
            'description'                       => 'nullable|date|max:100',
            'resp'                              => 'nullable|date',
            'loc'                               => 'nullable|string|max:255',
            'l'                                 => 'nullable|string|max:255',
            'w'                                 => 'nullable|string|max:255',
            'q'                                 => 'nullable|string|max:255',
            'curr'                              => 'nullable|string|max:255',
            'hour'                              => 'nullable|string|max:255',
            'labour'                            => 'nullable|string|max:255',
            'material'                          => 'nullable|string|max:255',
            'subtotal'                          => 'nullable|string|max:255',
        ]);

        Estimate_of_repairdetail::create($request->all());

        return redirect()->route('conten_app.conten_main.estimate_of_repair.index')
                         ->with('success', 'Order created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $estimate_of_repair = Estimate_of_repairdetail::findOrFail($id);
        return view('conten_app.conten_main.estimate_of_repair_detail.show', compact('$estimate_of_repair = estimate_of_repair::findOrFail($id);
'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $estimate_of_repair = Estimate_of_repairdetail::findOrFail($id);
        return view('conten_app.conten_main.estimate_of_repair_detail.edit', compact('$estimate_of_repair'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_detail_estimate_of_repair'      => 'nullable',
            'id_master_estimate_of_repair'      => 'nullable|string|max:255',
            'no'                                => 'nullable|string',
            'description'                       => 'nullable|date|max:100',
            'resp'                              => 'nullable|date',
            'loc'                               => 'nullable|string|max:255',
            'l'                                 => 'nullable|string|max:255',
            'w'                                 => 'nullable|string|max:255',
            'q'                                 => 'nullable|string|max:255',
            'curr'                              => 'nullable|string|max:255',
            'hour'                              => 'nullable|string|max:255',
            'labour'                            => 'nullable|string|max:255',
            'material'                          => 'nullable|string|max:255',
            'subtotal'                          => 'nullable|string|max:255',
        ]);

        $estimate_of_repair = Estimate_of_repairdetail::findOrFail($id);
        $estimate_of_repair->update($request->all());

        return redirect()->route('conten_app.conten_main.estimate_of_repair.index')
                         ->with('success', 'Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Estimate_of_repairdetail::findOrFail($id);
        $item->delete();

        return redirect()->route('conten_app.conten_main.estimate_of_repair_detail.index')
            ->with('success', 'Switch Dms deleted successfully.');
    }
}
