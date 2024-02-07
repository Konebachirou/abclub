<?php

namespace App\Actions\User;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Arr;
use App\Events\User\UserCreated;
use Illuminate\Support\Facades\DB;

final class CreateUserAction
{
    public function handle(array $input): User
    {

        DB::beginTransaction();
        $user = User::create([
            'firstName' => Arr::get($input, 'firstName'),
            'lastName' => Arr::get($input, 'lastName'),
            'tel' =>  Arr::get($input, 'tel', null),
            'domaine' =>  Arr::get($input, 'domaine'),
            'email' =>  Arr::get($input, 'email'),
            'address' =>  Arr::get($input, 'address', null),
            'password' =>  Arr::get($input, 'password'),
        ]);

        DB::commit();

        return $user;
    }
}
