<?php
use App\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        Movie::insert([
            [
                'genre_id' => 1,
                'title' => 'Mad Max',
                'director' => 'George Miller',
                'release_year' => 2015,
                'rating' => 8.1,
            ],
            [
                'genre_id' => 2,
                'title' => 'The Shawshank Redemption',
                'director' => 'Frank Darabont',
                'release_year' => 1994,
                'rating' => 9.3,
            ],
            [
                'genre_id' => 3,
                'title' => 'The Hangover',
                'director' => 'Todd Phillips',
                'release_year' => 2009,
                'rating' => 7.7,
            ],
            [
                'genre_id' => 4,
                'title' => 'Interstellar',
                'director' => 'Christopher Nolan',
                'release_year' => 2014,
                'rating' => 8.7,
            ],
            [
                'genre_id' => 5,
                'title' => 'Se7en',
                'director' => 'David Fincher',
                'release_year' => 1995,
                'rating' => 8.6,
            ],
            [
                'genre_id' => 1,
                'title' => 'John Wick',
                'director' => 'Chad Stahelski',
                'release_year' => 2014,
                'rating' => 7.5,
            ],
            [
                'genre_id' => 2,
                'title' => 'Forrest Gump',
                'director' => 'Robert Zemeckis',
                'release_year' => 1994,
                'rating' => 8.8,
            ],
            [
                'genre_id' => 3,
                'title' => 'Home Alone',
                'director' => 'Chris Columbus',
                'release_year' => 1990,
                'rating' => 7.7,
            ],
            [
                'genre_id' => 4,
                'title' => 'The Matrix',
                'director' => 'The Wachowskis',
                'release_year' => 1999,
                'rating' => 8.7,
            ],
            [
                'genre_id' => 5,
                'title' => 'Shutter Island',
                'director' => 'Martin Scorsese',
                'release_year' => 2010,
                'rating' => 8.2,
            ]
        ]);
    }
}
