<?php

namespace App\Data;

class TestimoniesData
{

    public static function testimonies(): array
    {
        return [
        [
            'name' => 'Amina Yusuf',
            'role' => 'Beneficiary',
            'image'=>"tes/tes1.jpg",
            'content' => 'The support came when my family had lost hope. We received care and encouragement that helped us move forward.'
        ],
        [
            'name' => 'Daniel Okoro',
            'image'=>"tes/tes2.jpg",
            'role' => 'Beneficiary',
            'content' => 'Serving here showed me how small actions can truly change lives. The impact is real.'
        ],
        [
            'name' => 'Fatima Hassan',
            'role' => 'Community Leader',
            'image'=>"tes/tes3.jpg",
            'content' => 'Their programs brought healthcare and emotional support when our community needed it most.'
        ],
        [
            'name' => 'Michael Thompson',
            'role' => 'Donor',
            'image'=>"tes/tes4.jpg",
            'content' => 'Knowing my donations directly help families gives me confidence in this mission.'
        ],
        [
            'name' => 'Grace Nwoye',
            'role' => 'Program Coordinator',
            'image'=>"tes/tes5.jpg",
            'content' => 'Every initiative focuses on dignity and long-term change. That’s what makes the work meaningful.'
        ],
    ];
    }
}
