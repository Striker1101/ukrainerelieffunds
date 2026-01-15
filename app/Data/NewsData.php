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

    public static function news(): array
    {
        $categories = self::categories();

        return [
            [
                'id' => 0,
                'slug' => 'church-lord-solution',
                'image' => 'blog-01-416x458.png',
                'Author' => 'Admin',
                'date' => '2025-01-03',
                'category' => $categories[2],
                'content_one' => 'Millions of people living in rural communities struggle daily with access to clean and safe drinking water. Women and children often walk long distances to fetch water from unsafe sources.',
                'content_two' => 'This project focuses on drilling boreholes, installing water purification systems, and educating communities on proper water hygiene practices to prevent waterborne diseases.',
                'comments' => [
                    [
                        'name' => 'Sarah Ahmed',
                        'message' => 'This initiative will save many lives. Clean water is a basic human right.',
                        'date' => '2025-01-05',
                    ],
                ],
                'tags' => [ 'Water', 'Sanitation'],
            ],

            [
                'id' => 1,
                'slug' => 'emergency-disaster-response',
                'image' => 'blog-02-416x458.png',
                'Author' => 'Relief Team',
                'date' => '2025-01-10',
                'category' => $categories[0],
                'content_one' => 'Natural disasters leave families without shelter, food, or basic necessities. Immediate response is critical to reduce suffering and loss of life.',
                'content_two' => 'We provide emergency food supplies, temporary shelter, and medical assistance to affected communities within the first critical days.',
                'comments' => [
                    [
                        'name' => 'John Peters',
                        'message' => 'Thank you for responding quickly during the floods. Your help mattered.',
                        'date' => '2025-01-11',
                    ],
                ],
                'tags' => [ 'Emergency', 'Relief'],
            ],

            [
                'id' => 2,
                'slug' => 'medical-aid-for-children',
                'image' => 'blog-03-416x458.png',
                'Author' => 'Health Unit',
                'date' => '2025-01-12',
                'category' => $categories[1],
                'content_one' => 'Children in conflict and low-income regions often lack access to basic healthcare services, putting their lives at risk.',
                'content_two' => 'This program delivers essential medicines, medical checkups, and psychological support to vulnerable children and their families.',
                'comments' => [
                    [
                        'name' => 'Amina Yusuf',
                        'message' => 'My child received treatment when we had nowhere else to go.',
                        'date' => '2025-01-13',
                    ],
                ],
                'tags' => [ 'Healthcare', 'Children'],
            ],

            [
                'id' => 3,
                'slug' => 'education-for-the-future',
                'image' => 'instagram-1-1.jpg',
                'Author' => 'Education Team',
                'date' => '2025-01-14',
                'category' => $categories[3],
                'content_one' => 'Many children are unable to attend school due to poverty, displacement, or lack of resources.',
                'content_two' => 'We provide school materials, learning centers, and teacher support to help children gain access to quality education.',
                'comments' => [
                    [
                        'name' => 'Grace Nwoye',
                        'message' => 'Education is the key to breaking the cycle of poverty.',
                        'date' => '2025-01-15',
                    ],
                ],
                'tags' => [ 'Education', 'Empowerment'],
            ],

            [
                'id' => 4,
                'slug' => 'community-growth-project',
                'image' => 'instagram-1-3.jpg',
                'Author' => 'Community Outreach',
                'date' => '2025-01-16',
                'category' => $categories[4],
                'content_one' => 'Strong communities are built through collaboration, resources, and opportunity.',
                'content_two' => 'This initiative supports small businesses, vocational training, and local infrastructure to promote sustainable community development.',
                'comments' => [
                    [
                        'name' => 'Daniel Okoro',
                        'message' => 'This project helped our community become self-reliant.',
                        'date' => '2025-01-17',
                    ],
                ],
                'tags' => [ 'Community', 'Development'],
            ],
        ];
    }
}
