<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::create([
            'movie_id' => 1,
            'studio_id' => 1,
            'start_time' => now()->addDays(1)->setTime(18, 30),
        ]);
    }
}
