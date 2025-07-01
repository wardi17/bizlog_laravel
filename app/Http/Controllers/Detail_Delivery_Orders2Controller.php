<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailDeliveryOrders2;
class Detail_Delivery_Orders2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders =DetailDeliveryOrders2::All();
        return view('detaildeliveryorders2.index',compact('orders'));
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
            'id_master_derivery'=> 'nullable',
            'container_number'  => 'nullable',
            'seal_no'           =>'nullable',
            'size_type'         => 'nullable',
            'piece_count'       => 'nullable',
            'traffic_terms'     =>'nullable',
            'container_remarks' =>'nullable',


        ]);

       $order= DetailDeliveryOrders2::create($request->all());

        return redirect()->route('detaildeliveryorders2.index')
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
    public function update(Request $request, DetailDeliveryOrders2 $order)
    {
        $request->validate([
            'id_master_derivery'=> 'nullable',
            'container_number'  => 'nullable',
            'seal_no'           =>'nullable',
            'size_type'         => 'nullable',
            'piece_count'       => 'nullable',
            'traffic_terms'     =>'nullable',
            'container_remarks' =>'nullable',

        ]);

        $id = $request["id_detail_derivery1"];
        $model = $order->findOrFail($id);

        $model->id_master_derivery =$request["id_master_derivery"];
        $model->container_number =$request["container_number"];
        $model->seal_no =$request["seal_no"];
        $model->size_type =$request["size_type"];
        $model->piece_count =$request["piece_count"];
        $model->traffic_terms =$request["traffic_terms"];
        $model->container_remarks =$request["container_remarks"];
        $model->save();

        return redirect()->route('detaildeliveryorders2.index')
                         ->with('success', 'Order created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = DetailDeliveryOrders2::findOrFail($id);
        $item->delete();

        return redirect()->route('detaildeliveryorders2.index')
            ->with('success', 'Delivery_orders berhasil dihapus.');
    }
}
