<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cabangController extends Controller
{
    public function index()
    {
        return view('v_cabang');
    }
}
