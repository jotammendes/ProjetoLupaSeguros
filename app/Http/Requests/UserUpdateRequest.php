<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
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
            
            'nome' =>['required','string'],
            'email' =>['required','string'],
            'password' => ['nullable','string'],
            'confirm_password' => ['same:password', 'nullable', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome deve ser preenchido',
            'nome.string' => 'O campo Nome deve ser um texto',
            'email.required' => 'O campo Email deve ser preenchido',
            'email.string' => 'O campo Email deve ser um email Válido',
            'email.unique' => 'Este email já está cadastrado',
            'password.string' => 'O campo Senha deve ser um texto',
            'confirm_password.string' => 'O campo Confirmar Senha deve ser um texto',
            'confirm_password.same' => 'Senha não confirmada',
        ];
    }
}
