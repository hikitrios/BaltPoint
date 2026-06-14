<?php
use App\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        $genres = [
            'Action',
            'Drama',
            'Comedy',
            'Sci-Fi',
            'Thriller',
        ];

        foreach ($genres as $genre) {
            Genre::create([
                'name' => $genre
            ]);
        }
    }
}