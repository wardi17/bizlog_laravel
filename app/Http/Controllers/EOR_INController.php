<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bon_Bongkar;


class EOR_INController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bon_bongkar= Bon_Bongkar::all();
        return view('conten_app.conten_main.EOR_IN.index', compact('bon_bongkar'));
    }
    
    
}
