<?php

namespace App\Http\Controllers;

use App\Models\Repair_tarif_item;
use Illuminate\Http\Request;
use Reflector;

class Repair_tarif_itemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $repair_tarif_item =Repair_tarif_item::All();
        return view('conten_app.conten_main.Repair_tarif_item.index',compact('repair_tarif_item'));
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
            'repair_tarif_item_name' => 'nullable',
            'id_task_code'           => 'nullable',
            'id_depo'                => 'nullable',
            'id_pelayaran'           =>'nullable',
            'groups'                 =>'nullable',
            'id_component'           =>'nullable',
            'repair_type'            =>'nullable',
            'location'               =>'nullable',
            'lengths'                =>'nullable',
            'width'                  =>'nullable',
            'qty'                    =>'nullable',
            'unit'                   =>'nullable',
            'description'            =>'nullable',
            'lab_hour'               =>'nullable',
            'mat_cost'               =>'nullable',
            'third_party_mat_cost'   =>'nullable',
            'lab_rate_flag'          =>'nullable',

        ]);


       $repair_tarif_item= Repair_tarif_item::create($request->all());

        return redirect()->route('repair_tarif_item.index')
                         ->with('success', 'Order created successfully.');
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
            'repair_tarif_item_name' => 'nullable',
            'id_task_code'           => 'nullable',
            'id_depo'                => 'nullable',
            'id_pelayaran'           =>'nullable',
            'groups'                 =>'nullable',
            'id_component'           =>'nullable',
            'repair_type'            =>'nullable',
            'location'               =>'nullable',
            'lengths'                =>'nullable',
            'width'                  =>'nullable',
            'qty'                    =>'nullable',
            'unit'                   =>'nullable',
            'description'            =>'nullable',
            'lab_hour'               =>'nullable',
            'mat_cost'               =>'nullable',
            'third_party_mat_cost'   =>'nullable',
            'lab_rate_flag'          =>'nullable',
        ]);


         $model = Repair_tarif_item::findOrFail($id);

          $model->repair_tarif_item_name =$request["repair_tarif_item_name"];
           $model->id_task_code =$request["id_task_code"];
            $model->id_depo =$request["id_depo"];
            $model->id_pelayaran =$request["id_pelayaran"];
            $model->groups =$request["groups"];
            $model->id_component =$request["id_component"];
            $model->repair_type =$request["repair_type"];
            $model->location =$request["location"];
            $model->lengths =$request["lengths"];
            $model->width =$request["width"];
            $model->qty =$request["qty"];
            $model->unit =$request["unit"];
            $model->description =$request["description"];
            $model->lab_hour =$request["lab_hour"];
            $model->mat_cost =$request["mat_cost"];
            $model->third_party_mat_cost =$request["third_party_mat_cost"];
            $model->lab_rate_flag =$request["lab_rate_flag"];

         $model->save();
        return redirect()->route('repair_tarif_item.index')
                         ->with('success', 'Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

         $item= Repair_tarif_item::findOrFail($id);
        $item->delete();
        return redirect()->route('repair_tarif_item.index')
                         ->with('success', 'repair_tarif_item deleted successfully.');
    }
}