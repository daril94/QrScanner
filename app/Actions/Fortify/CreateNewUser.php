<?php

namespace App\Actions\Fortify;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\Usuario
     */
    public function create(array $input)
    {
        Validator::make($input, [
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
            'password' => $this->passwordRules(),
        ])->validate();

        return Usuario::create([
            'nombre' => $input['name'],
            'usuario' => $input['usuario'],
            'email' => $input['email'],
            'area' => $input['area'],
            'password' => Hash::make($input['password']),
            'rol' => $input['rol'],
            'estado' => 1


        ]);
    }
}
