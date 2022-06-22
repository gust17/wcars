<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'name' => 'required|min:5|max:255'


            'valor_fip' => 'required',
            'compra' => 'required',
            'vendedor' => 'required',
            'entrada' => 'required',
            'parcelas' => 'required',
            'cpf' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'ano' => 'required',
            'kilometragem' => 'required',
            'rg' => 'required',
            'telefone' => 'required',
            'pix' => 'required',
            'licenciado' => 'required',
            'debito_doc' => 'required',
            'total_debito' => 'required',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
