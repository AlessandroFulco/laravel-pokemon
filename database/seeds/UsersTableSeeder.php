<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{



    public function run()
    {
        $data = [
            'email' => 'allenatore@pokemon.com',
            'password' => Hash::make('12345678'),
        ];

        User::create($data);
    }
}
