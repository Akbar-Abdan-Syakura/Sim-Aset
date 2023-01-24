<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class pengajuanController extends Controller
{
    public function index()
    {
        return view('v_pengajuan.index');
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
