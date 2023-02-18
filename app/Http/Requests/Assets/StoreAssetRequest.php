<?php

namespace App\Http\Requests\Assets;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "category_id" => "required|numeric",
            "tgl_perolehan" => "",
            "cabang_id" => "required|numeric",
            "penempatan_id" => "required|numeric",
            "kondisi_id" => "required|numeric",
            "harga" => "",
        ];
    }
}
