<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudioFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => 'Studio', 
            'seat_capacity' => 0,
        ];
    }
}