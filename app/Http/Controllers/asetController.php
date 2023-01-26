<?php

namespace App\Http\Controllers;

use App\Models\tb_aset;
use App\Helpers\FormatIdr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Resources\asetResource;
use App\Models\tb_cabang;
use App\Models\tb_kondisi;
use App\Models\tb_penempatan;
use App\Models\tb_umur_ekonomis;
use Illuminate\Support\Facades\Validator;

class asetController extends Controller
{
    public function index()
    {
        $data = tb_aset::with(['cabang', 'penempatan', 'umur', 'kondisi'])->get();
        $result = new asetResource($data);
        // dd($result);
        return view('v_aset.index', compact('result'));
    }

    public function addform()
    {
        return view('v_aset.addform');
    }

    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'nama_cbng' => 'required|unique:tb_cabangs',
        //     'alamat' => 'required'
        // ],);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->with('errorForm', $validator->errors()->getMessages())
        //         ->withInput();
        // }
        // try {
        //     tb_aset::create([
        //         'nama_cbng' => $request->nama_cbng,
        //         'alamat' => $request->alamat,
        //         'created_at' => Carbon::now()
        //     ]);

        //     return redirect('cabang')->with('success', 'Data Berhasil Ditambahkan!');
        // } catch (\Exception $e) {
        //     return redirect('cabang')->with('error', 'Terjadi Kesalahan Saat Menambah Data.');
        // }
    }
}
