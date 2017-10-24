<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
            'nombre' => 'required',
            'precio' => 'required', 
            'cantidad'  => 'required', 
            'proveedor_id'  => 'required', 
            'categoria_id' => 'required',
        ];
    }

    public function messages()
    {
    return [
        'nombre.required' => 'El :attribute es obligatorio.',
        'precio.required' => 'Añade un :attribute al producto',
        'cantidad.required' => 'Añaden la :attribute del producto'
    ];
}
}
