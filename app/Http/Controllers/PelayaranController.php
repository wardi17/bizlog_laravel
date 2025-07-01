<?php

namespace App\Http\Controllers;

use App\Models\Pelayaran;
use Illuminate\Http\Request;

class PelayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $pelayaran =Pelayaran::All();
         $pelayaran = $pelayaran ?? [];
        return view('conten_app.conten_main.pelayaran.index',compact('pelayaran'));
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
            'pelayaran_name'   => 'nullable',
            'email'            => 'nullable',
            'phone_number'     => 'nullable',
            'address'          =>'nullable',
            'city'             =>'nullable',
            'pos_code'         =>'nullable',
            'country'          =>'nullable',
            'status_active'    =>'nullable',
            'contact_personal' =>'nullable',
            'registration_date'=>'nullable'
        ]);


       $pelayaran= Pelayaran::create($request->all());

        return redirect()->route('pelayaran.index')
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
            'pelayaran_name'   => 'nullable',
            'email'            => 'nullable',
            'phone_number'     => 'nullable',
            'address'          =>'nullable',
            'city'             =>'nullable',
            'pos_code'         =>'nullable',
            'country'          =>'nullable',
            'status_active'    =>'nullable',
            'contact_personal' =>'nullable',
            'registration_date'=>'nullable'
        ]);


         $model = Pelayaran::findOrFail($id);

          $model->pelayaran_name =$request["pelayaran_name"];
           $model->email =$request["email"];
            $model->phone_number =$request["phone_number"];
            $model->address =$request["address"];
            $model->city =$request["city"];
            $model->pos_code =$request["pos_code"];
            $model->country =$request["country"];
            $model->status_active =$request["status_active"];
            $model->contact_personal =$request["contact_personal"];
            $model->registration_date =$request["registration_date"];
         $model->save();
        return redirect()->route('pelayaran.index')
                         ->with('success', 'Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

         $item= Pelayaran::findOrFail($id);
        $item->delete();
        return redirect()->route('pelayaran.index')
                         ->with('success', 'Pelayaran deleted successfully.');
    }
}