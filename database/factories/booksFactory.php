<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class booksFactory extends Factory
{
    public function definition(): array
    {
        return [
            'bookname' => fake()->sentence(3),
            'author' => fake()->name(),
            'publisher' => fake()->text(10),
            'publicationdate' => fake()->date(),
            'content' => fake()->realText(200),
            'image' => fake()->imageUrl(400, 600, 'books'),
        ];
    }
}
