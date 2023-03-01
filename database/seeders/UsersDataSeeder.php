<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersDataSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // creating demo user
        $user = \App\Models\User::updateOrCreate(
            ['email' => 'demo@laravel.loc'],
            [
                'email' => 'demo@laravel.loc',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'name' => 'Demo_user',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ]
        );

        $user->films()->sync(Film::inRandomOrder()->limit(1)->pluck('id')); //user favourites
        $user->comments()->saveMany(Comment::factory()->count(2)->make()); // user comments

        $sourceComment = Comment::inRandomOrder()->first();
        $user->comments()->save(Comment::factory()->make(['film_id' => $sourceComment->film_id,'parent_comment_id' => $sourceComment->id]));
    }
}
