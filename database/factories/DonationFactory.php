<?php

namespace Database\Factories;

use App\Models\Donation;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonationFactory extends Factory
{
    protected $model = Donation::class;

    public function definition(): array
    {
        return [
            'slug' => $this->faker->slug(),
            'title' => $this->faker->sentence(),
            'donation' => $this->faker->randomFloat(2, 100, 10000),
            'goal' => $this->faker->randomFloat(2, 10000, 20000),
            'category_id' => Category::factory(),
            'content_one' => $this->faker->paragraph(),
            'content_two' => $this->faker->paragraph(),
            'sub_topic' => $this->faker->sentence(),
            'content_three' => $this->faker->paragraph(),
            'content_four' => $this->faker->paragraph(),
            'content_five' => $this->faker->paragraph(),
            'content_six' => $this->faker->paragraph(),
            'content_seven' => $this->faker->paragraph(),
            'image' => 'placeholder.png',
            'image_one' => 'placeholder1.png',
            'image_two' => 'placeholder2.png',
        ];
    }

    // Helper to insert exact data
    public function exactData(array $data)
    {
        return $this->state(fn () => [
            'slug' => $data['slug'],
            'title' => $data['title'],
            'donation' => str_replace(',', '', $data['donation']),
            'goal' => str_replace(',', '', $data['goal']),
            'content_one' => $data['content_one'],
            'content_two' => $data['content_two'],
            'sub_topic' => $data['sub_topic'],
            'content_three' => $data['content_three'],
            'content_four' => $data['content_four'],
            'content_five' => $data['content_five'],
            'content_six' => $data['content_six'],
            'content_seven' => $data['content_seven'],
            'image' => $data['image'],
            'image_one' => $data['image_one'],
            'image_two' => $data['image_two'],
        ]);
    }
}
