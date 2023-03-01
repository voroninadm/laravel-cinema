<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->sentences(2, true),
            'director' => $this->faker->name(),
            'starring' => [$this->faker->name(), $this->faker->name(), $this->faker->name()],
            'run_time' => random_int(60, 240),
            'released' => $this->faker->year(),
            'status' => 'ready',
            'imdb_id' => 'tt0' . random_int(000001, 999999),
        ];
    }
}
