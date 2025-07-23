<?php

namespace Database\Seeders;

use App\Models\Studio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Studio::create([
            'name' => 'Studio 1',
            'seat_rows' => 5,
            'seat_columns' => 10,
        ]);
    }
}
