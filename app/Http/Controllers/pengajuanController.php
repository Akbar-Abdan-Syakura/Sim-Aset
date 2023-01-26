<?php

namespace App\Http\Controllers;

use App\Models\tb_pengajuan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class pengajuanController extends Controller
{
    public function index()
    {
        $data = tb_pengajuan::get();
        return view('v_pengajuan.index', compact('data'));
    }
    public function setuju()
    {
        return view('v_pengajuan.setuju');
    }
    public function tdksetuju()
    {
        return view('v_pengajuan.tdksetuju');
    }
}
