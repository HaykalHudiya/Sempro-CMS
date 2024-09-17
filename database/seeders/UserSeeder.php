<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'contact@uncal-dt.com',
            'password' => Hash::make('Test1234'),
            'seed' => 1,
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
        ]);

        DB::table('users')->insert([
            'name' => 'Admin2',
            'email' => 'contact2@uncal-dt.com',
            'password' => Hash::make('Test1234'),
            'seed' => 1,
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now'),
        ]);
    }
}
