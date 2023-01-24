<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class asetController extends Controller
{
    public function index()
    {
        return view('v_aset.index');
    }
}
