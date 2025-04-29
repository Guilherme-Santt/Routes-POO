<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'password' => 'required|min:3',
            'email' => 'required|unique:users'
        ];
    }
    
    public function messages(){
        return [
        'name.required' => 'Campo nome obrigatório',
        'email.required' => 'Campo E-mail obrigatório',
        'password.required' => 'Senha obrigatória',
        'password.min' => 'Senha com min:3 caracteres',
        'email.unique'  => 'E-mail já cadastrado'
        ];
    }
}