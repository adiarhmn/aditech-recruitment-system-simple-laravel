<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'ADITECH Admin',
            'email' => 'admin@aditech.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'HR Manager',
            'email' => 'hr@aditech.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "Candidate {$i}",
                'email' => "candidate{$i}@example.com",
                'password' => Hash::make('password'),
                'role' => 'candidate',
                'email_verified_at' => now(),
            ]);
        }
    }
}
