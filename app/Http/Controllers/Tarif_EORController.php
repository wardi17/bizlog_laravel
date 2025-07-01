<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarif_EOR;
use App\Models\Location;
class Tarif_EORController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarif_eor = Tarif_EOR::all();
        $location = Location::all();
        $valuta=['IDR','US$','YN'];$depo="depo1";$depous="SYS";
        return view('conten_app.conten_main.Tarif_EOR.index',['tarif_eor' =>$tarif_eor,
        'location' =>$location,'valuta' =>$valuta,'depo' =>$depo,'depous' =>$depous]);            
 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('conten_app.conten_main.Tarif_EOR.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_tarif_EOR'  => 'nullable',
            'id_depo'       => 'nullable',
            'description'   => 'nullable|string|max:500',
            'resp'          => 'nullable|string|max:500',
            'id_location'   => 'nullable|string|max:500',
            'l'             => 'required|numeric|min:0',
            'w'             => 'required|numeric|min:0',
            'q'             => 'required|numeric|min:0',
            'curruncy'      => 'nullable|string|max:500',
            'hour'          => 'required|numeric|min:0',
            'labour'        => 'required|numeric|min:0',
            'material'      => 'required|numeric|min:0',
            'subtotal'      => 'required|numeric|min:0',
            'Create_By'     => 'nullable|string|max:255',
            'Create_Date'   => 'nullable|date',
            'Update_By'     => 'nullable|string|max:255',
            'Last_Update'   => 'nullable|date',
        ]);

        Tarif_EOR::create($request->all());

        return redirect()->route('conten_app.conten_main.tarif_EOR.index')
                         ->with('success', 'Tarif EOR created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_tarif_EOR'  => 'nullable',
            'id_depo'       => 'nullable',
            'description'   => 'nullable|numeric',
            'resp'          => 'nullable|string|max:500',
            'id_location'   => 'nullable|string|max:500',
            'l'             => 'nullable|string|max:500',
            'w'             => 'nullable|string|max:500',
            'q'             => 'nullable|string|max:500',
            'curruncy'      => 'nullable|string|max:500',
            'hour'          => 'nullable|string|max:500',
            'labour'        => 'nullable|string|max:500',
            'material'      => 'nullable|string|max:500',
            'subtotal'      => 'nullable|string|max:500',
            'Create_By'     => 'nullable|string|max:255',
            'Create_Date'   => 'nullable|date',
            'Update_By'     => 'nullable|string|max:255',
            'Last_Update'   => 'nullable|date'
        ]);

        $model = Tarif_EOR::findOrFail($id);

        $model->id_tarif_EOR =$request["id_tarif_EOR"];
         $model->id_depo =$request["id_depo"];
          $model->description =$request["description"];
          $model->resp =$request["resp"];
          $model->id_location =$request["id_location"];
          $model->l =$request["l"];
          $model->w =$request["w"];
          $model->q =$request["q"];
          $model->curruncy =$request["curruncy"];
          $model->hour =$request["hour"];
          $model->labour =$request["labour"];
          $model->material =$request["material"];
          $model->subtotal =$request["subtotal"];
       $model->save();

       $tarif_eor = Tarif_EOR::all();
       $location = Location::all();
       $valuta=['IDR','US$','YN'];$depo="depo1";$depous="SYS";
       return view('conten_app.conten_main.Tarif_EOR.index',['tarif_eor' =>$tarif_eor,
       'location' =>$location,'valuta' =>$valuta,'depo' =>$depo,'depous' =>$depous]);    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tarif_eor = Tarif_EOR::findOrFail($id);
        $tarif_eor->delete();

        return redirect()->route('conten_app.conten_main.Tarif_EOR.index')
                         ->with('success', 'Tarif EOR deleted successfully.');
    }
}
