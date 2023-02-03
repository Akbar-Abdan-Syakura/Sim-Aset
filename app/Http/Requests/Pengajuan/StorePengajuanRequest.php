<?php

namespace App\Http\Requests\Pengajuan;

use Illuminate\Foundation\Http\FormRequest;

class StorePengajuanRequest extends FormRequest
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
            "kd_pengajuan" => "required|unique:tb_pengajuans,kd_pengajuan",
            "nama_aset" => "",
            "qty" => "numeric|required",
            "harga" => ""
        ];
    }
}
