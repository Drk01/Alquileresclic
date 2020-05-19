<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'lastname' => 'admin',
            'mothersLastname' => 'admin',
            'phone' => '123456789',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789'),
            'api_token' => Str::random(60),
            'role' => 1
        ]);
        User::create([
            'name' => 'supervisor',
            'lastname' => 'supervisor',
            'mothersLastname' => 'supervisor',
            'phone' => '123456789',
            'email' => 'supervisor@supervisor.com',
            'password' => Hash::make('123456789'),
            'api_token' => Str::random(60),
            'role' => 2
        ]);

        User::create([
            'name' => 'usuario',
            'lastname' => 'usuario',
            'mothersLastname' => 'usuario',
            'phone' => '123456789',
            'email' => 'usuario@usuario.com',
            'password' => Hash::make('123456789'),
            'api_token' => Str::random(60),
            'role' => 0
        ]);

        factory(User::class, 10)->create();
    }
}
