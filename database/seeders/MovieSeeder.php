<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Showtime;
use App\Models\Studio;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        $studios = Studio::all();


        Movie::factory(10)->create()->each(function ($movie) use ($studios) {

            $numberOfShowtimes = rand(2, 5);
            for ($i = 0; $i < $numberOfShowtimes; $i++) {
                Showtime::create([
                    'movie_id' => $movie->id,
                    'studio_id' => $studios->random()->id,
                    'start_time' => Carbon::now()->addDays(rand(0, 7))->hour(rand(10, 21))->minute(rand(0,3)*15),
                    'price' => rand(35, 60) * 1000,
                ]);
            }
        });
    }
}