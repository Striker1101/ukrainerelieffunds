<?php

namespace App\Data;

class TestimoniesData
{
    public static function testimonies(): array
    {
        return [
            [
                'name' => 'Aisha Suleiman',
                'role' => 'Beneficiary',
                'image' => 'tes/tes1.jpg',
                'content' => "When support reached my family, it restored our hope.\n
We felt seen, heard, and respected.\n
The assistance helped us regain stability.\n
It gave us strength to plan for the future."
            ],
            [
                'name' => 'Yusuf Abdullahi',
                'role' => 'Beneficiary',
                'image' => 'tes/tes2.jpg',
                'content' => "This experience changed my understanding of community.\n
Every act of kindness mattered deeply.\n
The help we received was timely and sincere.\n
It reminded me that compassion still exists."
            ],
            [
                'name' => 'Fatima Al-Hassan',
                'role' => 'Community Leader',
                'image' => 'tes/tes3.jpg',
                'content' => "Our community was facing serious challenges.\n
Their programs brought relief and dignity.\n
Healthcare and emotional support arrived when needed most.\n
The impact continues to be felt today."
            ],
            [
                'name' => 'Olena Kovalenko',
                'role' => 'Donor',
                'image' => 'tes/tes4.jpg',
                'content' => "Supporting this mission feels personal.\n
Transparency and accountability stand out clearly.\n
I see how donations reach real families.\n
That trust makes me continue giving."
            ],
            [
                'name' => 'Andriy Shevchenko',
                'role' => 'Program Coordinator',
                'image' => 'tes/tes5.jpg',
                'content' => "Every project is built around human dignity.\n
Long-term impact is always the priority.\n
Communities are empowered, not dependent.\n
That approach defines meaningful change."
            ],
        ];
    }
}
