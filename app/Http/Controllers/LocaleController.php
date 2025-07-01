<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function setLocale($locale)
    {
        session(['applocale' => $locale]);
        return redirect()->back();
    }
}
