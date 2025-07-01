<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bon_Muat;
class Bon_MuatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bon_muats =Bon_Muat::All();
        return view('conten_app.conten_main.bon_muat.index',compact('bon_muats'));
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
       
            'id_depo'           => 'required',
            'do_no'             => 'required',
            'container_no'      =>'required',
            'customer'          => 'required',
            'email'             => 'required',
            'destination'       =>'required',
            'trucker_name'      =>'required',
            'vehicle_no'        =>'required',
            'vessel_voy'        =>'required',
            'party'             =>'nullable',
            'driver'            =>'nullable',
            'remarks'           =>'nullable',
            'commodity'         =>'nullable',
            'email_pic'          =>'nullable',
            'print_status'      =>'nullable'


        ]);

       $bon_muats= Bon_Muat::create($request->all());

        return redirect()->route('conten_app.conten_main.bon_muat.index')
                         ->with('success', 'Order created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bon_muats = Bon_Muat::find($id); // Mengambil satu objek
        return view('your.view.name', compact('bon_muats'));
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
    public function update(Request $request, bon_muat $bon_muats)
    {
        $request->validate([
            'id_bon_muat'=> 'nullable',
            'do_no'             => 'nullable',
            'container_no'      =>'nullable',
            'customer'          => 'nullable',
            'email'              => 'nullable',
            'destination'       =>'nullable',
            'trucker_name'      =>'nullable',
            'vehicle_no'        =>'nullable',
            'vessel_voy'        =>'nullable',
            'party'             =>'nullable',
            'driver'            =>'nullable',
            'remarks'           =>'nullable',
            'commodity'         =>'nullable',
            'email_pic'          =>'nullable',
            'print_status'      =>'nullable',

        ]);

        $id = $request["id_bon_muat"];
        $model = $bon_muats->findOrFail($id);

        $model->id_bon_muat =$request["id_bon_muat"];
        $model->do_no =$request["do_no"];
        $model->container_no =$request["container_no"];
        $model->customer =$request["customer"];
        $model->email =$request["email"];
        $model->destination =$request["destination"];
        $model->trucker_name =$request["trucker_name"];
        $model->vehicle_no =$request["vehicle_no"];
        $model->vessel_voy =$request["vessel_voy"];
        $model->party =$request["party"];
        $model->driver =$request["driver"];
        $model->remarks =$request["remarks"];
        $model->commodity =$request["commodity"];
        $model->email_pic =$request["email_pic"];
        $model->print_status =$request["print_status"];
        $model->save();

        return redirect()->route('conten_app.conten_main.bon_muat.index')
                         ->with('success', 'Order created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Bon_Muat::find($id);
        $item->delete();

        return redirect()->route('conten_app.conten_main.bon_muat.index')
            ->with('success', 'bon_muat berhasil dihapus.');
    }
}
