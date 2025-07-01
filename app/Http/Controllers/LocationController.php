<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $location = Location::all();
        return view('conten_app.conten_main.location.index', compact('location'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('conten_app.conten_main.location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_location'   => 'nullable',
            'id_depo'       => 'nullable',
            'description'   => 'nullable|numeric',
            'Create_By'     => 'nullable|string|max:255',
            'Create_Date'   => 'nullable|date',
            'Update_By'     => 'nullable|string|max:255',
            'Last_Update'   => 'nullable|date',
        ]);

        Location::create($request->all());

        return redirect()->route('conten_app.conten_main.location.index')
                         ->with('success', 'Tarif EOR created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $location = Location::findOrFail($id);
        return view('conten_app.conten_main.location.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $location = Location::findOrFail($id);
        return view('conten_app.conten_main.location.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_location'   => 'nullable',
            'id_depo'       => 'nullable',
            'description'   => 'nullable|numeric',
            'Create_By'     => 'nullable|string|max:255',
            'Create_Date'   => 'nullable|date',
            'Update_By'     => 'nullable|string|max:255',
            'Last_Update'   => 'nullable|date',
        ]);

        $location = Location::findOrFail($id);
        $location->update($request->all());

        return redirect()->route('conten_app.conten_main.location.index')
                         ->with('success', 'Tarif EOR updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();

        return redirect()->route('conten_app.conten_main.location.index')
                         ->with('success', 'Tarif EOR deleted successfully.');
    }
}
