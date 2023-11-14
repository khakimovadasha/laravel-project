<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Dasha', 
            'email'=> 'dasahakimova@gmail.com',
            'password' => Hash::make(20031017),
            'role'=> 'moderator'
        ]);
        User::create([
            'name' => 'Dasha', 
            'email'=> 'reader@gmail.com',
            'password' => Hash::make(1234567890),
            'role'=> 'reader'
        ]);
    }
}
