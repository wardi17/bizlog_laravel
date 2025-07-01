<?php

namespace App\Http\Controllers;

use App\Models\shipping;
use Illuminate\Http\Request;

class shippingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $shipping =shipping::All();
         $shipping = $shipping ?? [];
        return view('conten_app.conten_main.shipping.index',compact('shipping'));
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
            'prefix'            => 'nullable',
            'shipping_name'     => 'nullable',
            'email'             => 'nullable',
            'phone_number'      =>'nullable',
            'address'           =>'nullable',
            'city'              =>'nullable',
            'pos_code'          =>'nullable',
            'country'           =>'nullable',
            'status_active'     =>'nullable',
            'contact_personal'  =>'nullable',
            'registration_date' =>'nullable'
        ]);


       $shipping= shipping::create($request->all());

        return redirect()->route('shipping.index')
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



    $validatedData=    $request->validate([
            'prefix'            => 'nullable',
            'shipping_name'     => 'nullable',
            'email'             => 'nullable',
            'phone_number'      =>'nullable',
            'address'           =>'nullable',
            'city'              =>'nullable',
            'pos_code'          =>'nullable',
            'country'           =>'nullable',
            'status_active'     =>'nullable',
            'contact_personal'  =>'nullable',
            'registration_date' =>'nullable'
        ]);


        $prefix = $request->input('prefix');
        $shipping_name = $request->input('shipping_name');
        $email = $request->input('email');
        $phone_number = $request->input('phone_number');
        $address = $request->input('address');
        $city = $request->input('city');
        $pos_code = $request->input('pos_code');
        $country = $request->input('country');
        $status_active = $request->input('status_active');
        $contact_personal = $request->input('contact_personal');
        $registration_date = $request->input('registration_date');

           $model = shipping::find($id);
           if ($model) {
          $model->prefix =$prefix;

           $model->shipping_name =$shipping_name;
            $model->email =$email;
            $model->phone_number =$phone_number;
            $model->address =$address;
            $model->city =$city;
            $model->pos_code =$pos_code;
            $model->country =$country;
            $model->status_active =$status_active;
            $model->contact_personal =$contact_personal;
            $model->registration_date =$registration_date;
         $model->save();
         return redirect()->route('shipping.index')
         ->with('success', 'Order updated successfully.');
           }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

         $item= shipping::where("prefix",$id);
        $item->delete();
        return redirect()->route('shipping.index')
                         ->with('success', 'shipping deleted successfully.');
    }
}
