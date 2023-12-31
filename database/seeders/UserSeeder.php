<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'Admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $operator = User::create([
            'name' => 'Operator',
            'email' => 'Operator@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
