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
        $data = tb_cabang::all();
        $data = tb_cabang::paginate(10);
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

            return redirect('cabang')->with('success', 'Berhasil menambah data kantor cabang!');
        } catch (\Exception $e) {
            return redirect('cabang')->with('error', 'Terjadi Kesalahan Saat Menambah Data.');
        }
    }
    public function editform($id)
    {
        $data = tb_cabang::find($id);
        return view('v_cabang.editform', compact('data'));
    }

    public function update(Request $request, $id)
    {
        try {
            $cabang = tb_cabang::find($id);
            $cabang->nama_cbng = $request->nama_cbng;
            $cabang->alamat = $request->alamat;
            $cabang->updated_at = Carbon::now();
            $cabang->save();

            return redirect('cabang')->with('success', 'Berhasil mengubah data kantor cabang!');
        } catch (\Exception $e) {
            return redirect('cabang')->with('error', 'Terjadi kesalahan saat mengubah data.');
        }
    }

    public function destroy($id)
    {
        try {
            $cabang = tb_cabang::find($id);
            $cabang->delete();

            return redirect('cabang')->with('success', 'Berhasil menghapus data kantor cabang!');
        } catch (\Exception $e) {
            return redirect('cabang')->with('error', 'Terjadi Kesalahan Saat Mengubah Data.');
        }
    }
}
