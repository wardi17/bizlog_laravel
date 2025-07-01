<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterEstimateOfRepair;
class Master_Estimate_Of_RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $msestimateofrepair =MasterEstimateOfRepair::All();

        return view('conten_app.conten_main.ms_estimate_of_repair.index',compact('msestimateofrepair'));
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
        'id_depo'       => 'nullable',
        'eor_no'        => 'nullable',
        'container_no'  => 'nullable',
        'bl_no'         => 'nullable',
        'consignee'     => 'nullable',
        'eor_date'      => 'nullable',
        'principal'     => 'nullable',
        'valuta'        => 'nullable',
        'vessel_voyage' => 'nullable',
        'date_in'       => 'nullable'
        ]);

         $msestimateofrepair= MasterEstimateOfRepair::create($request->all());

        return redirect()->route('ms_estimate_of_repair.index')
                         ->with('success', 'msestimateofrepair created successfully.');
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
    public function update(Request $request, string $id)
    {
        $request->validate([
        'id_depo'       => 'nullable',
        'eor_no'        => 'nullable',
        'container_no'  => 'nullable',
        'bl_no'         => 'nullable',
        'consignee'     => 'nullable',
        'eor_date'      => 'nullable',
        'principal'     => 'nullable',
        'valuta'        => 'nullable',
        'vessel_voyage' => 'nullable',
        'date_in'       => 'nullable'
        ]);

        $model = MasterEstimateOfRepair::findOrFail($id);
        $model->id_depo =$request["id_depo"];
        $model->eor_no  =$request["eor_no"];
        $model->container_no =$request["container_no"];
        $model->bl_no =$request["bl_no"];
        $model->consignee =$request["consignee"];
        $model->eor_date =$request["eor_date"];
        $model->principal =$request["principal"];
        $model->vessel_voyage =$request["vessel_voyage"];
        $model->date_in =$request["date_in"];

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = MasterEstimateOfRepair::findOrFail($id);
        $model->delete();
        return redirect()->route('ms_estimate_of_repair.index')
                         ->with('success', 'MasterEstimateOfRepair deleted successfully.');
    }
}