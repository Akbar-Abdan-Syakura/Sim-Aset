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
        $dataAsset = tb_aset::with("cabang", "penempatan", "kondisi", "umur")->get();
        $dataAsset = collect($dataAsset);
        $dataAsset = $dataAsset->filter(function ($item) {
            AssetAgeService::setAssetAge($item);
            if ($item->umur) {
                $umur = $item->umur->umur_ekonomis;
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
