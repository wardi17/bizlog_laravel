<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailDeliveryOrders1;
class Detail_Delivery_Orders1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders =DetailDeliveryOrders1::All();

        return view('detaildeliveryorders1.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('detaildeliveryorders1.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'id_master_derivery'  => 'nullable',
            'marks'               => 'nullable',
            'package'             =>'nullable',
            'description_of_goods'=> 'nullable',
            'weight'              => 'nullable',
            'measurement'         =>'nullable',

        ]);

       $order= DetailDeliveryOrders1::create($request->all());

        return redirect()->route('detaildeliveryorders1.index')
                         ->with('success', 'Order created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = DetailDeliveryOrders1::findOrFail($id);
        return view('detaildeliveryorders1.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = DetailDeliveryOrders1::findOrFail($id);
        return view('detaildeliveryorders1.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetailDeliveryOrders1 $order)
    {
        $request->validate([
            'id_master_derivery'  => 'nullable',
            'marks'               => 'nullable',
            'package'             =>'nullable',
            'description_of_goods'=> 'nullable',
            'weight'              => 'nullable',
            'measurement'         =>'nullable',

        ]);

        $id = $request["id_detail_derivery1"];
        $model = $order->findOrFail($id);

        $model->id_master_derivery =$request["id_master_derivery"];
        $model->marks =$request["marks"];
        $model->package =$request["package"];
        $model->description_of_goods =$request["description_of_goods"];
        $model->weight =$request["weight"];
        $model->measurement =$request["measurement"];
        $model->save();

        return redirect()->route('detaildeliveryorders1.index')
                         ->with('success', 'Order created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = DetailDeliveryOrders1::findOrFail($id);
        $item->delete();

        return redirect()->route('detaildeliveryorders1.index')
            ->with('success', 'Delivery_orders berhasil dihapus.');
    }
}
