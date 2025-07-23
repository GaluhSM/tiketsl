<?php

namespace Database\Seeders;

use App\Models\Seat;
use App\Models\Studio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studio = Studio::first();
        for ($row = 1; $row <= $studio->seat_rows; $row++) {
            for ($col = 1; $col <= $studio->seat_columns; $col++) {
                $seatCode = chr(64 + $row) . $col;
                Seat::create([
                    'studio_id' => $studio->id,
                    'code' => $seatCode,
                ]);
            }
        }
    }
}
