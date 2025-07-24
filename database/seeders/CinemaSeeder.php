<?php

namespace Database\Seeders;

use App\Models\Cinema;
use App\Models\Seat;
use App\Models\Studio;
use Illuminate\Database\Seeder;

class CinemaSeeder extends Seeder
{
    public function run(): void
    {

        Cinema::factory(2)->create()->each(function ($cinema) {

            for ($i = 1; $i <= 3; $i++) {
                $studio = Studio::factory()->create([
                    'cinema_id' => $cinema->id,
                    'name' => 'Studio ' . $i,
                ]);

                $rows = ['A', 'B', 'C', 'D', 'E'];
                foreach ($rows as $row) {
                    for ($j = 1; $j <= 10; $j++) {
                        Seat::create([
                            'studio_id' => $studio->id,
                            'row' => $row,
                            'number' => $j,
                        ]);
                    }
                }

                $studio->update(['seat_capacity' => count($rows) * 10]);
            }
        });
    }
}