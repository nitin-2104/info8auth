<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

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
            'f_name' => ['required', 'string', 'max:250'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            'phone_number' => ['required', 'string', 'max:250'],
            'address' => ['required', 'string', 'max:250'],
            'qualification' => ['required', 'string', 'max:250'],
            'gender' => ['required', 'string', 'max:250'],


        ])->validate();

        return User::create([
            'name'=> $input['f_name'],
            'f_name' => $input['f_name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'address' => $input['address'],
            'qualification' => $input['qualification'],
            'phone_number' => $input['phone_number'],
            'gender' => $input['gender'],

        ]);
    }
}
