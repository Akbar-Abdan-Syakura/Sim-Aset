<?php

namespace App\Http\Controllers;

use App\Models\tb_aset;
use App\Http\Controllers\Controller;
use App\Http\Requests\Assets\StoreAssetRequest;
use App\Http\Resources\asetResource;
use App\Models\tb_cabang;
use App\Models\tb_kondisi;
use App\Models\tb_penempatan;
use App\Models\tb_umur_ekonomis;
use App\Services\AssetAgeService;
use Exception;
use Illuminate\Http\RedirectResponse;

class asetController extends Controller
{
    public function index()
    {
        $data = tb_aset::with(['cabang', 'penempatan', 'umur', 'kondisi'])->get();
        $result = new asetResource($data);
        return view('v_aset.index', compact('result'));
    }

    public function addform()
    {
        $data = [
            "branchs" => tb_cabang::all(),
            "placements" => tb_penempatan::all(),
            "economicAges" => tb_umur_ekonomis::all(),
            "conditions" => tb_kondisi::all()
        ];
        return view('v_aset.addform', $data);
    }

    public function store(StoreAssetRequest $request): RedirectResponse
    {
        $requestedData = $request->validated();
        AssetAgeService::setAssetAge($requestedData);

        try {
            tb_aset::create($requestedData);
            $response = [
                "success" => true,
            ];
        } catch (Exception $e) {
            $response = [
                "success" => false,
                "message" => "Terjadi kesalahan silahkan coba lagi"
            ];
        }
        if ($this->isError($response))
            return $this->getErrorResponse();

        return redirect()->route("aset")->with("success", "Add new data asset successfully");
    }
}
