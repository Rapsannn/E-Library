<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Atmin Cakep',
            'slug' => 'atmin-cakep',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'role' => 'admin',
            'password' => bcrypt('admin123')
        ]);

        User::create([
            'name' => 'Muhammad Rafsanjani',
            'slug' => 'muhammad-rafsanjani',
            'email' => 'Rapsanoi@gmail.com',
            'username' => 'Rapsannn',
            'role' => 'user',
            'password' => bcrypt('Haha123')
        ]);
    }
}