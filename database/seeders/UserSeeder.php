<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Admin Perpus 1',
            'nip'  => '123456',
            'email' => 'admin@example.com',
            'alamat' => 'yogya',
            'no_hp' => '082131430',
            'foto' => 'asd',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);
    }
}
