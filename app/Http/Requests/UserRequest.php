<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
            'name' =>['required','string'],
            'email' =>['required','string',Rule::unique('users')->ignore($request->user()->id)],
            
            'password' => ['required','string'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo Nome deve ser preenchido',
            'name.string' => 'O campo Nome deve ser um texto',
            'email.required' => 'O campo Email deve ser preenchido',
            'email.string' => 'O campo Email deve ser um email Válido',
            'email.unique' => 'Este email já está cadastrado',
            'password.required' => 'O campo Password deve ser preenchido',
            'password.string' => 'O campo Password deve ser um texto',
        ];
    }
}