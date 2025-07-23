<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'title' => 'The Eternal Star',
            'description' => 'Seorang gadis menemukan realitas alternatif...',
            'poster_url' => 'https://example.com/poster1.jpg',
            'is_trending' => true,
        ]);
    }
}
