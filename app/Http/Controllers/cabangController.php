<?php

namespace App\Http\Controllers;

use App\Models\tb_cabang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;



class cabangController extends Controller
{
    public function index()
    {
        $data = tb_cabang::get();
        return view('v_cabang.index', compact('data'));
    }
    public function addform()
    {
        return view('v_cabang.addform');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_cbng' => 'required|unique:tb_cabangs',
            'alamat' => 'required'
        ],);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }
        try {
            tb_cabang::create([
                'nama_cbng' => $request->nama_cbng,
                'alamat' => $request->alamat,
                'created_at' => Carbon::now()
            ]);

            return redirect('cabang')->with('success', 'Data Berhasil Ditambahkan!');
        } catch (\Exception $e) {
            return redirect('cabang')->with('error', 'Terjadi Kesalahan Saat Menambah Data.');
        }
    }
    public function editform($id)
    {
        $data = tb_cabang::find($id);
        return view('v_cabang.editform', compact('data'));
    }

    public function update(Request $request)
    {
        $validateData = $request->validate([
            'nama_cbng' => 'required|unique:tb_cabangs',
            'alamat' => 'required',
        ]);

        // try {
        // $cabang = tb_cabang::find($request->id);
        // $cabang->update($validateData);
        //     return redirect('cabang')->with('success', 'Data Berhasil Diubah!');
        // } catch (\Exception $e) {
        //     return redirect('cabang')->with('error', 'Terjadi Kesalahan Saat Mengubah Data.');
        // }
    }

    public function destroy(Request $request)
    {
    }
}
