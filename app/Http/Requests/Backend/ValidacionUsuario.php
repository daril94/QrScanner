<?php

namespace App\Http\Requests\Backend;
use Laravel\Fortify\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Usuario;
use Illuminate\Validation\Rule;


class ValidacionUsuario extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'usuario' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(Usuario::class),
            ],
            'area' => ['required', 'string', 'max:255'],
            'rol' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
        ];
    }



}
