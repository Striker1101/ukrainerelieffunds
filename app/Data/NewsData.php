<?php

namespace App\Data;

class NewsData
{
    public static function categories(): array
    {
        return [
            'Disaster Relief',
            'Healthcare Support',
            'Clean Water & Sanitation',
            'Education & Empowerment',
            'Community Development',
        ];
    }

    public static function tags(): array
    {
        return [
            'Water',
            'Sanitation',
            'Emergency',
            'Relief',
            'Healthcare',
            'Children',
            'Education',
            'Empowerment',
            'Community',
            'Development',
        ];
    }

    public static function news(): array
    {
        $categories = self::categories();
        $tags = self::tags();

        return [
            [
                'id' => 0,
                'slug' => 'church-lord-solution',
                'image' => 'blog-01-416x458.png',
                'Author' => 'Admin',
                'Author_image' => null,
                'Author_keyword' => "Clean Water Advocate\nCommunity Builder\nHealth Educator",
                'date' => '2025-01-03',
                'category' => [$categories[2], $categories[4]],
                'content_one' => 'Millions of people in rural communities lack access to safe drinking water.',
                'content_two' => 'The project drills boreholes and educates communities on hygiene.',
                'comments' => [
                    [
                        'name' => 'Sarah Ahmed',
                        'message' => 'Clean water changes everything.',
                        'date' => '2025-01-05',
                    ],
                ],
                'tags' => [$tags[0], $tags[1]],
            ],

            [
                'id' => 1,
                'slug' => 'emergency-disaster-response',
                'image' => 'blog-02-416x458.png',
                'Author' => 'Relief Team',
                'Author_image' => null,
                'Author_keyword' => "Disaster Responder\nEmergency Aid Specialist\nCommunity Helper",
                'date' => '2025-01-10',
                'category' => [$categories[0], $categories[1]],
                'content_one' => 'Natural disasters displace thousands of families.',
                'content_two' => 'Rapid relief includes food, shelter, and medical aid.',
                'comments' => [
                    [
                        'name' => 'John Peters',
                        'message' => 'Your fast response saved lives.',
                        'date' => '2025-01-11',
                    ],
                ],
                'tags' => [$tags[2], $tags[3]],
            ],

            [
                'id' => 2,
                'slug' => 'medical-aid-for-children',
                'image' => 'blog-03-416x458.png',
                'Author' => 'Health Unit',
                'Author_image' => null,
                'Author_keyword' => "Child Healthcare\nMedical Support\nHealth Awareness",
                'date' => '2025-01-12',
                'category' => [$categories[1], $categories[4]],
                'content_one' => 'Children lack access to essential healthcare services.',
                'content_two' => 'We provide medicines and psychological support.',
                'comments' => [
                    [
                        'name' => 'Amina Yusuf',
                        'message' => 'My child received urgent care.',
                        'date' => '2025-01-13',
                    ],
                ],
                'tags' => [$tags[4], $tags[5]],
            ],

            [
                'id' => 3,
                'slug' => 'education-for-the-future',
                'image' => 'instagram-1-1.jpg',
                'Author' => 'Education Team',
                'Author_image' => null,
                'Author_keyword' => "Teacher Support\nLearning Advocate\nChild Education",
                'date' => '2025-01-14',
                'category' => [$categories[3], $categories[0]],
                'content_one' => 'Millions of children are out of school.',
                'content_two' => 'We provide school materials, learning centers, and teacher support.',
                'comments' => [
                    [
                        'name' => 'Grace Nwoye',
                        'message' => 'Education is the key to breaking the cycle of poverty.',
                        'date' => '2025-01-15',
                    ],
                ],
                'tags' => [$tags[6], $tags[7]],
            ],

            [
                'id' => 4,
                'slug' => 'community-growth-project',
                'image' => 'instagram-1-3.jpg',
                'Author' => 'Community Outreach',
                'Author_image' => 'author-community.jpg',
                'Author_keyword' => "Local Development\nCommunity Builder\nBusiness Support",
                'date' => '2025-01-16',
                'category' => [$categories[4], $categories[3]],
                'content_one' => 'Strong communities are built through collaboration and resources.',
                'content_two' => 'This initiative supports small businesses and local infrastructure.',
                'comments' => [
                    [
                        'name' => 'Daniel Okoro',
                        'message' => 'This project helped our community become self-reliant.',
                        'date' => '2025-01-17',
                    ],
                ],
                'tags' => [$tags[8], $tags[9]],
            ],
        ];
    }
}
