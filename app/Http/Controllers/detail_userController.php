<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class detail_usersController extends Controller
{
    public function index()
    {
        return view('v_detail_user.index');
    }
}
