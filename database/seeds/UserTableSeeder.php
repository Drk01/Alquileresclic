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
            'lastnames' => 'admin',
            'phone' => '123456789',
            'indicative' => '52',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789'),
            'api_token' => Str::random(60),
            'role' => 1
        ]);
        User::create([
            'name' => 'supervisor',
            'lastnames' => 'supervisor',
            'phone' => '123456789',
            'indicative' => '52',
            'email' => 'supervisor@supervisor.com',
            'password' => Hash::make('123456789'),
            'api_token' => Str::random(60),
            'role' => 2
        ]);

        User::create([
            'name' => 'usuario',
            'lastnames' => 'usuario',
            'phone' => '123456789',
            'indicative' => '52',
            'email' => 'usuario@usuario.com',
            'password' => Hash::make('123456789'),
            'api_token' => Str::random(60),
            'role' => 0
        ]);

        factory(User::class, 10)->create();
    }
}
