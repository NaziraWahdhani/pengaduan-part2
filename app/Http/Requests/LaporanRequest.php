<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class LaporanRequest extends FormRequest
    {
        public function authorize()
        {
            return true;
        }

        public function rules()
        {
            return [
                'nama' => 'required|string|max:255',
                'alamat' => 'required|string|max:255',
                'tanggal_kejadian' => 'required|date',
                'kategori' => 'required|string|max:255',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'laporan' => 'required|string',
            ];
        }
    }
