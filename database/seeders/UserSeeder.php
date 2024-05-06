<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Vaguinha Remota',
            'email' => 'vaguinharemota@gmail.com',
            'password' => '$2y$10$fsuixIQIqVb8vSfjzHfN6uEEGIuj5L29yjULFc6BPlWjzoriplqM2',
        ]);
    }
}
