<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Donation;
use App\Data\DonationData;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $categories = [];

        // Create categories using factory with exact names
        foreach (DonationData::categories() as $name) {
            $categories[$name] = Category::factory()
                ->state(['name' => $name])
                ->create();
        }

        // Create donations using factory with exact data
        foreach (DonationData::donations() as $donation) {
            Donation::factory()
                ->state([
                    'slug' => $donation['slug'],
                    'title' => $donation['title'],
                    'donation' => str_replace(',', '', $donation['donation']),
                    'goal' => str_replace(',', '', $donation['goal']),
                    'category_id' => $categories[$donation['category']]->id,
                    'content_one' => $donation['content_one'],
                    'content_two' => $donation['content_two'],
                    'sub_topic' => $donation['sub_topic'],
                    'content_three' => $donation['content_three'],
                    'content_four' => $donation['content_four'],
                    'content_five' => $donation['content_five'],
                    'content_six' => $donation['content_six'],
                    'content_seven' => $donation['content_seven'],
                    'image' => $donation['image'],
                    'image_one' => $donation['image_one'],
                    'image_two' => $donation['image_two'],
                ])
                ->create();
        }

        $paymentMethods = [
    [
        'name' => 'Bitcoin',
        'slug' => 'bitcoin',
        'address' => '3452-23423-234234',
        'network' => 'bep20',
        'image' => 'bitcoin.png',
        'show' => true
    ],
    [
        'name' => 'Eth',
        'slug' => 'eth',
        'address' => '3452-23423-234234',
        'network' => 'bep20',
        'image' => 'bitcoin.png',
        'show' => true
    ]
];

foreach ($paymentMethods as $method) {
    \App\Models\PaymentMethod::create($method);
}
    }
}
