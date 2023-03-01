<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Film;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmsSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seeding films with genres
        $films = Film::factory()
            ->count(3)
            ->create()
            ->each(fn($film) => $film->genres()->attach(
                Genre::inRandomOrder()->limit(3)->pluck('id')
            ));

        $films->random(2)
            ->each(fn($film) => $film->update(['promo' => true]));

        // seeding films with comments and genres
        Film::factory()->count(2)
            ->has(Comment::factory()->count(2))
            ->create()
            ->each(fn($film) => $film->genres()->attach(
                Genre::inRandomOrder()->limit(3)->pluck('id')
            ));
    }
}
