<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterDeliveryOrder;

class Master_Delivery_OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $master_delivers = MasterDeliveryOrder::all();
        return view('conten_app.conten_main.master_delivery_order.index', compact('master_delivers'));
    }
   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('conten_app.conten_main.Master_Delivery_Order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'id_depo' => 'nullable',
            'order_number' => 'nullable',     
            'delivery_date' =>'nullable',
            'dodate' => 'required|date',
            'departure_date' => 'required|date',
            'number_voyage'=>'nullable',
            'port_of_loading' =>'nullable',
            'port_of_discharge' =>'nullable',
            'estimated_time_of_arrival' =>'nullable|date',
            'call_sign' =>'nullable',
            'number_registation' =>'nullable',
            'place_of_delivery' =>'nullable',
            'estimated_cargo_arrival_date' =>'nullable|date',
            'number_barcode' =>'nullable',
        ]);

        $order= MasterDeliveryOrder::create($request->all());

        return redirect()->route('msdeliveryorders.index')
        ->with('success', 'Order created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $master_delivers = MasterDeliveryOrder::findOrFail($id); // Mengambil 1 record
        return view('conten_app.conten_main.Master_Delivery_Order.show', compact('master_delivers'));
    }


    public function edit(string $id)
    {
        $master_delivers = MasterDeliveryOrder::findOrFail($id);
        return view('conten_app.conten_main.Master_Delivery_Order.edit', compact('master_delivers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'order_number' => 'nullable',
            'id_depo' => 'nullable',
            'delivery_date' =>'nullable',
            'dodate' => 'required|date',
            'departure_date' => 'required|date',
            'number_voyage'=>'nullable',
            'port_of_loading' =>'nullable',
            'port_of_discharge' =>'nullable',
            'estimated_time_of_arrival' =>'nullable',
            'call_sign' =>'nullable',
            'number_registation' =>'nullable',
            'place_of_delivery' =>'nullable',
            'estimated_cargo_arrival_date' =>'nullable',
            'number_barcode' =>'nullable',
        ]);

        $order = MasterDeliveryOrder::findOrFail($id);
        $order->update($request->all());
        return redirect()->route('msdeliveryorders.index')
        ->with('success', 'Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = MasterDeliveryOrder::findOrFail($id);
        $order->delete();
        return redirect()->route('msdeliveryorders.index')
        ->with('success', 'Order deleted successfully.');
    }
}
