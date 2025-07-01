<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\switch_dms;

class switch_dmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $switch_dms= switch_dms::all();
        return view('conten_app.conten_main.switch_dms.index', compact('switch_dms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('conten_app.conten_main.switch_dms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_master_switch_dms'      => 'nullable',
            'container_no'              => 'nullable|string|max:255',
            'bl_no'                     => 'nullable|string',
            'date_in'                   => 'nullable|date|max:100',
            'survey_status'             => 'nullable|date',
            'codeco_status'             => 'nullable|string|max:255',
        ]);

        switch_dms::create($request->all());

        return redirect()->route('conten_app.conten_main.switch_dms.index')
                         ->with('success', 'Order created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $switch_dms = switch_dms::findOrFail($id);
        return view('conten_app.conten_main.switch_dms.show', compact('$switch_dms = switch_dms::findOrFail($id);
'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $switch_dms = switch_dms::findOrFail($id);
        return view('conten_app.conten_main.switch_dms.edit', compact('$switch_dms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_master_switch_dms'      => 'nullable',
            'container_no'              => 'nullable|string|max:255',
            'bl_no'                     => 'nullable|string',
            'date_in'                   => 'nullable|date|max:100',
            'survey_status'             => 'nullable|string|max:100',
            'codeco_status'             => 'nullable|string|max:255',
        ]);

        $switch_dms = switch_dms::findOrFail($id);
        $switch_dms->update($request->all());

        return redirect()->route('conten_app.conten_main.switch_dms.index')
                         ->with('success', 'Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = switch_dms::findOrFail($id);
        $item->delete();

        return redirect()->route('conten_app.conten_main.switch_dms.index')
            ->with('success', 'Switch Dms deleted successfully.');
    }
}
