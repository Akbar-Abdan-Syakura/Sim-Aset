<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\tb_cabang;

class cabangController extends Controller
{
    public function index()
    {
        return view('v_cabang.index');
    }

    // public function store(Request $request)
    // {
    //     //to validate new request insert data

    //     $cabang = new tb_cabang;

    //     $cabang->nama_cbng = $request->nama_cbng;
    //     $cabang->alamat = $request->alamat;

    //     $cabang->save();
    // }
}
