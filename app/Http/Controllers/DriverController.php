<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Pelayaran;
class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $driver= Driver::all();
        $driver = $driver ?? [];
        $pelayaran= Pelayaran::all();
        $pelayaran = $pelayaran ?? [];
        return view('conten_app.conten_main.driver.index', compact('driver','pelayaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('conten_app.conten_main.driver.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_driver'      => 'nullable',
            'Driver_name'    => 'nullable|string|max:255',
            'id_pelayaran'   => 'nullable|string',
            'phone_number'   => 'nullable|date|max:100',
            'Create_By'      => 'nullable',
            'Create_Date'    => 'nullable',
            'Update_By'      => 'nullable',
            'Last_Update'    => 'nullable',
        ]);

      
        Driver::create($request->all());

        return redirect()->route('conten_app.conten_main.driver.index')
                         ->with('success', 'Order created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $driver = Driver::findOrFail($id);
        return view('conten_app.conten_main.driver.show', compact('$driver = driver::findOrFail($id);
'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $driver = Driver::findOrFail($id);
        return view('conten_app.conten_main.driver.edit', compact('$driver'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        dd($request);
        $request->validate([
            'id_driver'      => 'nullable',
            'Driver_name'    => 'nullable|string|max:255',
            'id_pelayaran'   => 'nullable|string',
            'phone_number'   => 'nullable|date|max:100',
            'Create_By'      => 'nullable',
            'Create_Date'    => 'nullable',
            'Update_By'      => 'nullable',
            'Last_Update'    => 'nullable',
        ]);

        $driver = Driver::findOrFail($id);
        $driver->update($request->all());

        return redirect()->route('conten_app.conten_main.driver.index')
                         ->with('success', 'Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Driver::findOrFail($id);
        $item->delete();

        return redirect()->route('conten_app.conten_main.driver.index')
            ->with('success', 'Driver deleted successfully.');
    }
}
