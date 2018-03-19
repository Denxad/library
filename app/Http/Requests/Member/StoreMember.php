<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;

class StoreMember extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|max:255',
            'telefone' => 'numeric|digits:9',
            'telemovel' => 'numeric|digits:9'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.max' => 'Nome não pode ter mais que 255 caracteres',
            'name.required' => 'Nome é obrigatório',
            'telefone.numeric' => 'Telefone só pode ter números',
            'telefone.digits'  => 'Telefone tem que ter nove digitos',
            'telemovel.numeric' => 'Telefone só pode ter números',
            'telemovel.digits'  => 'Telemóvel tem que ter nove digitos',
        ];
    }
}
