<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'title' => $this->faker->sentence(3),
        'author' => $this->faker->name(),
        'price' => $this->faker->randomFloat(2, 5, 100),
        'category_id' => \App\Models\Category::factory(), // نربطه تلقائيًا بفئة
        'description' => $this->faker->paragraph(),
        ];
    }
}
