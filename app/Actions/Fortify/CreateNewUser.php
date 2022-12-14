<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Auth;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:45'],
            'direccion' => ['required', 'string', 'max:45'],
            'cedula' => ['required', 'integer', 'unique:users'],
            'edad' => ['required', 'integer'],
            'telefono' => ['required', 'string', 'max:45'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'apellido' => $input['apellido'],
            'direccion' => $input['direccion'],
            'cedula' => $input['cedula'],
            'edad' => $input['edad'],
            'telefono' => $input['telefono'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
        $user->assignRole('cliente');
        return $user;
    }

    protected function redirectTo(){
        if (Auth::user()->hasRole('Admin')) {
            return "/admin";
        }

        if (Auth::user()->hasRole('cliente')) {
            return "/";
        }
    }
}
