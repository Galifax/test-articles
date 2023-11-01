<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        $title = fake()->text(100);
        return [
            'active' => fake()->boolean(),
            'title' => fake()->text(100),
            'description' => fake()->text(255),
            'content' => fake()->text(1000),
            'url' => Str::slug($title),
        ];
    }
}
