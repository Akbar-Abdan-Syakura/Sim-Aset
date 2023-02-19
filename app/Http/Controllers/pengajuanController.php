<?php

namespace App\Http\Controllers;

use App\Exceptions\EmptyDataException;
use App\Models\tb_pengajuan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Pengajuan\StorePengajuanRequest;
use App\Http\Requests\Pengajuan\UpdatePengajuanRequest;
use App\Models\Category;
use App\Services\GenerateKodePengajuanService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class pengajuanController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->input("type", "pending");
        $data = tb_pengajuan::with('user')->where("status", $type)->paginate(10);
        return view('v_pengajuan.index', compact('data'));
    }

    public function create()
    {
        $data = [
            "categories" => Category::all()
        ];
        return view('v_pengajuan.addform', $data);
    }

    public function store(StorePengajuanRequest $request): RedirectResponse
    {
        $requestedData = $request->validated();
        $requestedData["user_id"] = Auth::id();
        $requestedData["status"] = "pending";
        $requestedData["kd_pengajuan"] = GenerateKodePengajuanService::getGeneratedKode();

        try {
            tb_pengajuan::create($requestedData);
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

        return redirect()->route("pengajuan")->with("success", "Berhasil menambah data pengajuan");
    }

    public function update(UpdatePengajuanRequest $request, int $id)
    {
        try {
            $pengajuan = tb_pengajuan::find($id);
            if (!$pengajuan)
                throw new EmptyDataException();

            tb_pengajuan::where("id", $id)->update($request->validated());

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

        return redirect()->route("pengajuan")->with("success", "Berhasil mengganti status pengajuan");
    }
}
