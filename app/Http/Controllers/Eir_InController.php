<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EirIn;
class Eir_InController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eirins =EirIn::All();
        return view('conten_app.conten_main.eirin.index',compact('eirins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_eir_in'            => 'nullable',
            'id_depo'              => 'nullable',
            'bill_of_lading_number'=>'nullable',
            'customer'             => 'nullable',
            'ctr_no'               => 'nullable',
            'date_in'              =>'nullable',
            'vehicle_no'           =>'nullable',


        ]);
      $enin = EirIn::create($request->all());
      return redirect()->route('conten_app.conten_main.eirin.index')
                         ->with('success', 'enin created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,EirIn $eirIn)
    {
        $request->validate([
            'id_eir_in'            => 'nullable',
            'id_depo'              => 'nullable',
            'bill_of_lading_number'=>'nullable',
            'customer'             => 'nullable',
            'ctr_no'               => 'nullable',
            'date_in'              =>'nullable',
            'vehicle_no'           =>'nullable',


        ]);

        $id = $request["id_eir_in"];
        $model = $eirIn->findOrFail($id);
        $model->id_depo = $request["id_depo"];
        $model->bill_of_lading_number = $request["bill_of_lading_number"];
        $model->customer = $request["customer"];
        $model->ctr_no = $request["ctr_no"];
        $model->date_in = $request["date_in"];
        $model->vehicle_no = $request["vehicle_no"];

        $model->save();
        return redirect()->route('conten_app.conten_main.eirin.index')
                         ->with('success', 'eirin  created successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = EirIn::findOrFail($id);
        $item->delete();

        return redirect()->route('conten_app.conten_main.eirin.index')
            ->with('success', 'eirIn berhasil dihapus.');
    }
}
