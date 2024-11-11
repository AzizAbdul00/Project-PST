<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // User::destroy(5,6,7,8,9,10,11);
        // 1
        User::create([
            'name' => 'Abdul Aziz',
            'username' => 'abdulaziz',
            'email' => 'abdulaziz@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        // 2
        User::create([
            'name' => 'Naufal Alif Ba Ta sa',
            'username' => 'ofalalifbatasa',
            'email' => 'ofalalifbatasa@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        // 3
        User::create([
            'name' => 'Daffa Afarizki',
            'username' => 'daffarizki',
            'email' => 'daffaaffarizki@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        // 4
        User::create([
            'name' => 'Sigma Dingin',
            'username' => 'akusigma',
            'email' => 'sigmaaaaaa@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        // 5
        User::create([
            'name' => 'Asep Kamala',
            'username' => 'asepgmt22',
            'email' => 'asepkamala24@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        // 6
        User::create([
            'name' => 'Rohman Maulana',
            'username' => 'rohmanmaulana',
            'email' => 'rohmanmaulana@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        // 7
        User::create([
            'name' => 'Muhammda Aria',
            'username' => 'ariagans24',
            'email' => 'ariamuhammad@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        // 8
        User::create([
            'name' => 'Nabila Putri Nuraini',
            'username' => 'nabilaputrinuraini',
            'email' => 'nabilaputrinuraini@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        // 9
        User::create([
            'name' => 'Haland Fatlan',
            'username' => 'halandfatlan',
            'email' => 'halanadfatlan@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        // 10
        User::create([
            'name' => 'Oktavia Puspita',
            'username' => 'oktaviapuspita',
            'email' => 'oktaviapuspita@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        
    }
}