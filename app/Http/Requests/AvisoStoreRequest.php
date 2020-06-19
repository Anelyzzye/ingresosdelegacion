<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvisoStoreRequest extends FormRequest
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
            'aviso_titulo' => 'required',
            'aviso_link' => 'required',
            'aviso_image' => 'required'
        ];
    }
}
