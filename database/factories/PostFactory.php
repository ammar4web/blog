<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'title' => $this->faker->text(50),
            // 'body' => $this->faker->paragraph(),
            'title' => $this->faker->realText(26),
            'body' => $this->faker->realText(600),
            'author' => $this->faker->name(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
