<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consignee;
class ConsigneeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $consignee =Consignee::All();
        return view('conten_app.conten_main.consignee.index',compact('consignee'));
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
            'consignee_name'=> 'nullable',
            'address'       => 'nullable'

            ]);

         $consignee= Consignee::create($request->all());

        return redirect()->route('consignee.index')
                         ->with('success', 'consignee successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(consignee $consignee)
    {
        return view('conten_app.conten_main.consignee.show', compact('consignee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(consignee $consignee)
    {
        return view('conten_app.conten_main.consignee.edit', compact('consignee'));
    }

    /**
     * Update the specified resource in storage.
     */


     
    public function update(Request $request, string $id)
    {
            $request->validate([
            'id_depo'       => 'required',
            'consignee_name'=> 'required',
            'address'       => 'required'

            ]);
            $consignee = Consignee::findOrFail($id);

          $consignee->id_depo        = $request["id_depo"];
          $consignee->consignee_name = $request["consignee_name"];
          $consignee->address        = $request["address"];
          $consignee->save();
          return redirect()->route('consignee.index')
                         ->with('success', 'consignee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item= Consignee::findOrFail($id);
        $item->delete();
        return redirect()->route('consignee.index')
                         ->with('success', 'consignee deleted successfully.');
    }
}