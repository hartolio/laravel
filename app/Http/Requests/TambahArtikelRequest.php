<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TambahArtikelRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $a = return [
            'judul'=> 'required|min:5',
            'isi`'=> 'required|min:10'
        ];
    }
}
