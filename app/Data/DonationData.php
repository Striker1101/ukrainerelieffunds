<?php

namespace App\Data;

class DonationData
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

    public static function donations(): array
    {
        $categories = self::categories();

        return [
            [
                'id' => 0,
                'slug' => 'delivering-clean-water-to-rural-communities',
                'image' => 'donation-01-416x300.png',
                'title' => 'Delivering Clean Water to Rural Communities',
                'donation' => '3,850.00',
                'goal' => '11,000.00',
                'category' => $categories[2],
                'content_one' => 'Millions of people living in rural communities struggle daily with access to clean and safe drinking water. Women and children often walk long distances to fetch water from unsafe sources.',
                'content_two' => 'This project focuses on drilling boreholes, installing water purification systems, and educating communities on proper water hygiene practices to prevent waterborne diseases.',
                'sub_topic' => 'Why Clean Water Matters',
                'content_three' => 'Clean water reduces child mortality, improves school attendance, and boosts local economic activities by freeing time spent searching for water.',
                'content_four' => 'Your donation directly funds infrastructure, maintenance training, and local water committees to ensure sustainability.',
                'content_five' => 'Each completed water project can serve over 500 people for more than 15 years.',
                'content_six' => 'Transparency is key—regular reports and photos are shared so donors can track progress.',
                 'content_seven' => '',
                'comments' => [],
                'image_one'=> "donation-d-1-3-1.jpg",
                'image_two' => "donation-d-1-2-1.jpg"
            ],

            [
                'id' => 1,
                'slug' => 'emergency-medical-aid-for-underserved-areas',
                'image' => 'donation-07-416x300.png',
                'title' => 'Emergency Medical Aid for Underserved Areas',
                'donation' => '4,230.00',
                'goal' => '9,000.00',
                'category' => $categories[1],
                'content_one' => 'In many underserved regions, basic medical care is either unavailable or unaffordable.',
                'content_two' => 'This initiative provides emergency medical supplies, mobile clinics, and volunteer healthcare professionals to areas in urgent need.',
                'sub_topic' => 'Saving Lives Through Access',
                'content_three' => 'Timely medical intervention drastically reduces preventable deaths from malaria, infections, and childbirth complications.',
                'content_four' => 'Funds are used for medications, diagnostic equipment, and transportation for emergency cases.',
                'content_five' => 'We partner with local hospitals to strengthen long-term healthcare delivery.',
                'content_six' => 'Your support ensures dignity, care, and hope for vulnerable families.',
                 'content_seven' => '',
                'comments' => [],
                'image_one'=> "",
                'image_two' => ""
            ],

            [
                'id' => 2,
                'slug' => 'nutrition-support-for-vulnerable-children',
                'image' => 'donation-02-416x300.png',
                'title' => 'Nutrition Support for Vulnerable Children',
                'donation' => '7,000.00',
                'goal' => '10,000.00',
                'category' => $categories[0],
                'content_one' => 'Child malnutrition remains a critical challenge in disaster-affected and low-income communities.',
                'content_two' => 'This program delivers nutrient-rich food packages, supplements, and nutrition education to families.',
                'sub_topic' => 'Building Healthy Futures',
                'content_three' => 'Proper nutrition improves brain development, immunity, and school performance.',
                'content_four' => 'We work with community health workers to monitor child growth and recovery.',
                'content_five' => 'Each contribution feeds a child for weeks.',
                'content_six' => 'Long-term food security solutions are integrated into every intervention.',
                'content_seven' => '',
                'comments' => [],
                'image_one'=> "",
                'image_two' => ""
            ],

            [
                'id' => 3,
                'slug' => 'education-access-for-displaced-children',
                'image' => 'donation-03-416x300.png',
                'title' => 'Education Access for Displaced Children',
                'donation' => '6,000.00',
                'goal' => '10,000.00',
                'category' => $categories[3],
                'content_one' => 'Displaced children often lose access to formal education due to conflict or disasters.',
                'content_two' => 'This campaign builds temporary learning centers and supplies educational materials.',
                'sub_topic' => 'Learning Without Limits',
                'content_three' => 'Education restores normalcy and hope for children affected by crisis.',
                'content_four' => 'Funds support teachers, books, digital tools, and safe classrooms.',
                'content_five' => 'We prioritize inclusivity for girls and children with disabilities.',
                'content_six' => 'Education is the strongest foundation for rebuilding communities.',
                'content_seven' => '',
                'comments' => [],
                'image_one'=> "",
                'image_two' => ""
            ],

            [
                'id' => 4,
                'slug' => 'community-rebuilding-after-natural-disasters',
                'image' => 'donation-04-416x300.png',
                'title' => 'Community Rebuilding After Natural Disasters',
                'donation' => '5,000.00',
                'goal' => '10,000.00',
                'category' => $categories[4],
                'content_one' => 'Natural disasters leave families homeless and communities shattered.',
                'content_two' => 'This initiative focuses on rebuilding homes, schools, and essential infrastructure.',
                'sub_topic' => 'Restoring Hope',
                'content_three' => 'Safe shelter is the first step toward recovery and dignity.',
                'content_four' => 'Local artisans and workers are employed to boost the economy.',
                'content_five' => 'Every structure is built with resilience and sustainability in mind.',
                'content_six' => 'Your donation helps families start anew.',
                'comments' => [],
                'image_one'=> "",
                'image_two' => "",
                 'content_seven' => 'Community rebuilding is about restoring hope. It is about ensuring children return to safe schools, families return to secure homes, and neighborhoods regain their sense of unity. This initiative stands as a testament to human resilience and compassion. When communities are rebuilt with care, dignity, and foresight, they emerge stronger than before. Your support is not just rebuilding structures—it is rebuilding futures.',

        'comments' => [
            [
                'content' => 'God help these families recover from everything they have lost.',
                'reply' => ['Amen', 'May they find strength and peace']
            ],
            [
                'content' => 'This project gives people a real chance to start again.',
                'reply' => ['Absolutely true', 'Recovery takes time but this helps']
            ]
        ]
            ],

            [
                'id' => 5,
                'slug' => 'empowering-women-through-skill-acquisition',
                'image' => 'donation-05-416x300.png',
                'title' => 'Empowering Women Through Skill Acquisition',
                'donation' => '5,000.00',
                'goal' => '10,000.00',
                'category' => $categories[4],
                'content_one' => 'Women are powerful drivers of economic growth when given the right opportunities.',
                'content_two' => 'This project provides vocational training, startup kits, and mentorship.',
                'sub_topic' => 'Economic Independence',
                'content_three' => 'Skills training increases household income and community stability.',
                'content_four' => 'Participants receive business guidance and access to micro-financing.',
                'content_five' => 'Empowered women uplift entire families.',
                'content_six' => 'Your support creates lasting generational impact.',
                'content_seven' => '',
                'comments' => [],
                'image_one'=> "",
                'image_two' => ""
            ],
        ];
    }
}
