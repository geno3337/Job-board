<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'employer',
            'email' => 'employer@gmail.com',
            'password' => Hash::make('Employer@123'),
            'roles'=>'employer',
        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Admin@123'),
            'roles'=>'admin',
        ]);

        User::factory()->create([
            'name' => 'candidate',
            'email' => 'candidate@gmail.com',
            'password' => Hash::make('Candidate@123'),
            'roles'=>'candidate',
        ]);

    }
}
