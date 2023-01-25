<?php

namespace App\Http\Controllers;

use App\Models\tb_cabang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class cabangController extends Controller
{
    public function index()
    {
        $data = tb_cabang::all();
        return view('v_cabang.index', ['tb_cabangs' => $data]);
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
