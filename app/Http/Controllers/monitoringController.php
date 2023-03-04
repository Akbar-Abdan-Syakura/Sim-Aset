<?php

namespace App\Http\Controllers;

use App\Models\tb_aset;
use App\Services\AssetAgeService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class monitoringController extends Controller
{
    public function index()
    {
        $cabangId = request()->query("cabang");
        $kriteriaId = request()->query("kriteria");
        $dataAsset = tb_aset::with("cabang", "penempatan", "kondisi", "category");
        if ($cabangId) {
            $dataAsset = $dataAsset->where("cabang_id", $cabangId);
        }
        if($kriteriaId){
            $dataAsset = $dataAsset->whereHas("category", function ($query) use($kriteriaId){
                return $query->where("kriteria_id", $kriteriaId);
            });
        }
        $dataAsset = collect($dataAsset->get());
        $dataAsset = $dataAsset->filter(function ($item) {
            AssetAgeService::setAssetAge($item);
            if ($item->category->umur) {
                $umur = $item->category->umur->umur_ekonomis;
                $umur = explode(" ", $umur);
                $umur = $umur[0];
                if ($item["usia_aset"] >= $umur) {
                    return true;
                }
            }

            if ($item->kondisi_id == 3 || $item->kondisi_id == 4) {
                return true;
            }
        });
        $data = [
            "assets" => $dataAsset
        ];
        return view('v_monitoring.index', $data);
    }
}
