<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(),
        ];
    }

    // Helper to create category with exact name
    public function exactName(string $name)
    {
        return $this->state(function () use ($name) {
            return ['name' => $name];
        });
    }
}
