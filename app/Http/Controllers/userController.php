<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class userController extends Controller
{
    public function index()
    {
        $data = User::get();
        return view('v_user.index', compact('data'));
    }
    public function addform()
    {
        return view('v_user.addform');
    }

    public function store()
    {
        //
    }
}
