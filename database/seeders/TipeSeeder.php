<?php

namespace Database\Seeders;

use App\Models\tipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tipe::create([
            'name' => 'Article'
        ]);

        tipe::create([
            'name' => 'Whitepaper'
        ]);

        tipe::create([
            'name' => 'Event'
        ]);
    }
}
