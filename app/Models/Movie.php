<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'poster_url',
        'duration_minutes',
        'age_rating',
        'release_date',
        'is_trending',
    ];

    public function showtimes()
    {
        return $this->hasMany(Showtime::class);
    }
}