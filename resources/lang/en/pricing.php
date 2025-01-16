<?php
return [
    'title' => 'Pricing',
    'plans' => [
        'basic' => [
            'name' => 'Basic Plan',
            'price' => '25.000,-',
            'period' => '/ weeks',
            'description' => 'Perfect for small events where you want to engage guests with real-time messages displayed on big screens.',
            'features' => [
                'Maximum of 2 Events',
                '5.000 Messages',
                'Customizable message bubble colors, fonts, and sizes',
                'IP & Email Tracking',
                'Up to 100 MB storage',
            ],
        ],
        'standard' => [
            'name' => 'Standard Plan',
            'price' => '40.000,-',
            'period' => '/ weeks',
            'popular' => 'Most Popular',
            'description' => 'A perfect package for multi-day events like club nights, corporate events, and small festivals.',
            'features' => [
                'Maximum of 4 Events',
                '25.000 Messages',
                'Full Customization (Bubble & Background)',
                'Send Image Attachments (up to 10 MB / file)',
                'IP & Email Tracking',
                'Up to 300 MB storage',
            ],
        ],
        'premium' => [
            'name' => 'Premium Plan',
            'price' => '100.000,-',
            'period' => '/ weeks',
            'description' => 'Best solution for large festivals and recurring events with custom animations and more storage for interactive experiences.',
            'features' => [
                'Maximum of 6 Events',
                '100.000 Messages',
                'Full Customization (Bubble & Background)',
                'Animations Effect Features',
                'Chats Themes',
                'Send Image Attachments (up to 15 MB / file)',
                'IP & Email Tracking',
                'Up to 1 GB storage',
            ],
        ],
    ],
];
