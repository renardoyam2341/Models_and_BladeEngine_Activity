<?php

namespace Database\Factories;
use Illuminate\Database\Seeders\BookTableSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'isbn' => fake()->unique()->isbn13(),
            'title' => fake()->sentence(),
            'author' => fake()->name(),
            'description' => fake()->text(),
            'date_published' => fake()->date(),

        ];
    }
}
