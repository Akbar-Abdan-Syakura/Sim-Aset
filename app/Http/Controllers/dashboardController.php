<?php

namespace App\Http\Controllers;

use App\Models\tb_aset;
use App\Models\tb_pengajuan;
use App\Services\AssetAgeService;
use App\Statics\BobotStatic;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    public function index()
    {
        $dataAsset = tb_aset::with(['cabang', 'penempatan', 'umur', 'kondisi'])->whereIn("kondisi_id", [3, 4])->where("harga",">", 100000)->get();
        if($dataAsset->count()>0){

        $dataAsset = collect($dataAsset)->map(function ($item)
        {
            AssetAgeService::setAssetAge($item);

            // Untuk set C1 (bobot usia asset)
            foreach (BobotStatic::USIA_ASET as $key => $value) {
                if(!isset($value["upper"])){
                    if($item["usia_aset"]>= $value["lower"]){
                        $item["c1"] = $value["bobot"];
                        break;
                    }
                }
                if($item["usia_aset"] >= $value["lower"] && $item["usia_aset"] <= $value["upper"]){
                    $item["c1"] = $value["bobot"];
                }
            }

            // Untuk set C2 (bobot kondisi aset)
            $item["c2"] = $item["kondisi_id"];


            // Untuk set c3 (harga aset)
            foreach (BobotStatic::BIAYA_ASET as $key => $value) {
                if(!isset($value["upper"])){
                    if($item["harga"] > $value["lower"]){
                        $item["c3"] = $value["bobot"];
                        break;
                    }
                }
                if($item["harga"] > $value["lower"] && $item["harga"] <= $value["upper"]){
                    $item["c3"] = $value["bobot"];
                }
            }

            return $item;
        });

        $maxC1 = $dataAsset->max("c1");
        $maxC2 = $dataAsset->max("c2");
        $minC3 = $dataAsset->min("c3");

        $dataAssetSAW = $dataAsset->map(function ($item) use($maxC1, $maxC2, $minC3) {
            $item["c1SAW"] = $item["c1"] / $maxC1;
            $item["c2SAW"] = $item["c2"] / $maxC2;
            $item["c3SAW"] = $minC3 / $item["c3"];

            $item["preferensiV"] = (0.3 * $item["c1SAW"]) + (0.4 * $item["c2SAW"]) + (0.3 * $item["c3SAW"]);
            return $item;
        });

        $sumPreferensi = $dataAssetSAW->sum("preferensiV");
        $sumPreferensiRusakRingan = $dataAssetSAW->where("kondisi_id", 3)->sum("preferensiV");
        $sumPreferensiRusakBerat = $dataAssetSAW->where("kondisi_id", 4)->sum("preferensiV");

        $persenPerluDiperbaki = $sumPreferensiRusakRingan / $sumPreferensi;
        $persenPerluDiganti = $sumPreferensiRusakBerat / $sumPreferensi;


        $dataAssetFinal = $dataAssetSAW->map(function ($item) use($persenPerluDiganti, $persenPerluDiperbaki){
            $item["status"] = "-";

            if($item["preferensiV"] >= $persenPerluDiganti){
                $item["status"] = "Perlu Diganti";
            }

            if($item["preferensiV"] >=  $persenPerluDiperbaki && $item["preferensiV"] < $persenPerluDiganti){
                $item["status"] = "Perlu Diperbaiki";
            }
            return $item;
        });

        }else{
            $dataAssetFinal = collect([]);
        }

        $dataMonitoring = tb_aset::whereIn("kondisi_id", [3,4])->get();
        $dataMonitoring = collect($dataMonitoring);
        $dataMonitoring = $dataMonitoring->filter(function ($item) {
            AssetAgeService::setAssetAge($item);
            if($item->umur){
                $umur = $item->umur->umur_ekonomis;
                $umur = explode(" ", $umur);
                $umur = $umur[0];
                if($item["usia_aset"] >= $umur){
                    return true;
                }
            }

            if($item->kondisi_id == 3 || $item->kondisi_id == 4){
                return true;
            }
        });
        $data = [
            "totalAsset" => tb_aset::all()->count(),
            "totalRekomendasi" => $dataAssetFinal->count()??0,
            "totalPengajuan" => tb_pengajuan::all()->count(),
            "totalMonitoring" => $dataMonitoring->count(),
        ];
        return view('v_dashboard.index', $data);
    }
}
