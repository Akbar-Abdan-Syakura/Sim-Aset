<?php

namespace App\Http\Controllers;

use App\Helpers\FormatIdr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\asetResource;
use App\Models\tb_aset;

class asetController extends Controller
{
    public function index()
    {
        $data = tb_aset::with(['penempatan', 'umur', 'kondisi'])->get();
        $result = new asetResource($data);
        // dd($result);
        return view('v_aset.index', ['tb_asets' => $result]);
    }
}
