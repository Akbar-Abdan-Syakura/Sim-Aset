<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detail_usersController extends Controller
{
    public function index()
    {
        return view('v_detail_user');
    }
}
