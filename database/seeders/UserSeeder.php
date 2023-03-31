<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'role_id' => '1',
            'nama' => 'Lili',
            'email' => 'lili@gmail.com',
            'password' => Hash::make('tes'),
        ]);
        User::create([
            'role_id' => '2',
            'nama' => 'SMANJI',
            'email' => 'smanji@gmail.com',
            'password' => Hash::make('tes'),
        ]);
    }
}
