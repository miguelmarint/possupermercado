<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserPost extends FormRequest
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
            'name'=>'required|min:3|max:120;',
            'email'=>'required|min:2|max:120;',
            'password'=>'required|min:8|max:50;',
            'eps'=>'required|min:1|max:120;',
            'arl'=>'required|min:1|max:120;',
            'documento'=>'required|min:3|max:120;',
            'salario'=>'required|min:1|max:120;',
            'direccion'=>'required|min:1|max:120;'
        ];
    }
}
