<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MovieFactory extends Factory
{
    public function definition(): array
    {
        $title = $this->faker->sentence(3);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph(5),
            'poster_url' => 'https://via.placeholder.com/300x450.png?text=Movie+Poster',
            'duration_minutes' => $this->faker->numberBetween(90, 180),
            'age_rating' => $this->faker->randomElement(['SU', 'R13+', 'D17+']),
            'release_date' => $this->faker->date(),
            'is_trending' => $this->faker->boolean(25),
        ];
    }
}