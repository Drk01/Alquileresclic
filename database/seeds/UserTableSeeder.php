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
            'password' => Hash::make('secret'),
            'api_token' => Str::random(60)
        ]);
    }
}
