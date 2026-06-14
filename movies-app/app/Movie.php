<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'genre_id',
        'title',
        'director',
        'release_year',
        'rating',
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}