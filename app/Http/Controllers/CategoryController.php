<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\tb_umur_ekonomis;
use App\Services\GenerateKodeCategoryService;
use Exception;

class CategoryController extends Controller
{
    public function index()
    {
        $data = [
            "categories" => Category::paginate(15)
        ];
        return response()->view("v_categories.index", $data);
    }

    public function create()
    {
        $data = [
            "umur_aset" => tb_umur_ekonomis::all()
        ];
        return response()->view("v_categories.create", $data);
    }

    public function store(StoreCategoryRequest $request)
    {
        try {
            $requestedData = $request->validated();
            $requestedData["kd_category"] = GenerateKodeCategoryService::getGeneratedKode();
            Category::create($requestedData);

            return redirect()->to(route("category.index"))->with("success", "Menambahkan data category berhasil");
        } catch (Exception $e) {
        }
    }

    public function edit($id)
    {
        $data = [
            "umur_aset" => tb_umur_ekonomis::all(),
            "category" => Category::find($id)
        ];
        return response()->view("v_categories.edit", $data);
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        try {
            Category::where("id", $id)->update($request->validated());
            return redirect()->to(route("category.index"))->with("success", "Mengupdate data category berhasil");
        } catch (\Throwable $th) {
        }
    }
}
