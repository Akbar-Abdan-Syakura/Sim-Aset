<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rekomendasiController extends Controller
{
    public function index()
    {
        return view('v_rekomendasi');
    }
}
