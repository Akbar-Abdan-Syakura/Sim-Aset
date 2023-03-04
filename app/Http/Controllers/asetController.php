<?php

namespace App\Http\Controllers;

use App\Exceptions\EmptyDataException;
use App\Models\tb_aset;
use App\Http\Controllers\Controller;
use App\Http\Requests\Assets\StoreAssetRequest;
use App\Http\Requests\Assets\UpdateAssetRequest;
use App\Http\Resources\asetResource;
use App\Models\Category;
use App\Models\tb_cabang;
use App\Models\tb_kondisi;
use App\Models\tb_penempatan;
use App\Models\tb_umur_ekonomis;
use App\Services\GenerateKodeAssetService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class asetController extends Controller
{
    public function index()
    {
        $cabangId = request()->query("cabang");
        $kriteriaId = request()->query("kriteria");
        $userCabangId = Auth::user()->cabang_id;

        if ($userCabangId) {
            $data = tb_aset::with(['cabang', 'penempatan', 'kondisi', 'category'])->where("cabang_id", $userCabangId);
        } else {
            $data = tb_aset::select("*");
            if ($cabangId) {
                $data = $data->where("cabang_id", $cabangId);
            }
        }
        if($kriteriaId){
            $data = $data->whereHas("category" , function ($query) use($kriteriaId){
                    return $query->where("kriteria_id", $kriteriaId);
            });
        }
        $data = $data->paginate(10);
        $result = new asetResource($data);
        return view('v_aset.index', compact('result'));
    }

    public function addform()
    {
        $data = [
            "categories" => Category::all(),
            "branchs" => tb_cabang::all(),
            "placements" => tb_penempatan::all(),
            "conditions" => tb_kondisi::all()
        ];
        return view('v_aset.addform', $data);
    }
    public function editForm(int $id)
    {
        $data = [
            "categories" => Category::all(),
            "branchs" => tb_cabang::all(),
            "placements" => tb_penempatan::all(),
            "economicAges" => tb_umur_ekonomis::all(),
            "conditions" => tb_kondisi::all(),
            "asset" => tb_aset::find($id)
        ];
        return view('v_aset.editform', $data);
    }

    public function update(UpdateAssetRequest $request, int $id)
    {
        $requestedData = $request->validated();
        try {
            $asset = tb_aset::find($id);


            if (!$asset)
                throw new EmptyDataException();

            tb_aset::where("id", $id)->update($requestedData);
            $response = [
                "success" => true,
            ];
        } catch (Exception $e) {
            $response = [
                "success" => false,
                "message" => $e->getMessage()
            ];
        }
        if ($this->isError($response))
            return $this->getErrorResponse();

        return redirect()->route("aset")->with("success", "Berhasil mengubah data asset");
    }
    public function store(StoreAssetRequest $request): RedirectResponse
    {
        $requestedData = $request->validated();
        $requestedData["kd_aset"] = GenerateKodeAssetService::getGeneratedKode();
        try {
            tb_aset::create($requestedData);
            $response = [
                "success" => true,
            ];
        } catch (Exception $e) {
            $response = [
                "success" => false,
                // "message" => "Terjadi kesalahan silahkan coba lagi"
                "message" => $e->getMessage()
            ];
        }
        if ($this->isError($response))
            return $this->getErrorResponse();

        return redirect()->route("aset")->with("success", "Berhasil menambahkan data asset");
    }

    public function destroy(int $id)
    {
        tb_aset::destroy($id);
        return redirect()->route("aset")->with("success", "Berhasil menghapus data asset");
    }
}
