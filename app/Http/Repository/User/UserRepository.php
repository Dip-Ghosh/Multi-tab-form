<?php

namespace App\Http\Repository\User;

use App\Models\User;
use Carbon\Carbon;

class UserRepository implements UserInterface
{

    public function create(array $attributes)
    {
        return User::create([
            'email' => $attributes['email'],
            'password' => bcrypt($attributes['password']),
            'created_at' =>carbon::now(),
        ]);
    }
}
