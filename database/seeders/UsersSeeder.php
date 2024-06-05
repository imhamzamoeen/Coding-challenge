<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        User::firstOrCreate([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now()
        ]);

        User::firstOrCreate([
            'name' => 'Test User 2',
            'email' => 'test2@test.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now()
        ]);

        User::firstOrCreate([
            'name' => 'Test User 3',
            'email' => 'test3@test.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now()
        ]);

    }
}
