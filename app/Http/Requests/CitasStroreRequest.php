<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CitasStroreRequest extends FormRequest
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
            'ciudadanos_id' => 'required',
            'dia' => 'required',
            'hora' => 'required',
            'tipotramites_id' => 'required',
             ];
    }
}
