<?php
return [
    'setting' => [
        'address' => '26/E/A-1st Colony, Mazar Road Mirpur-1, Dhaka-1216 Dhaka, Dhaka- North, Mirpur 1',
        'phone' => '09649700002',
        'email' => 'yttc.institute@gmail.com'
    ],
    'bluck_api_key' => env('BLUCK_API_KEY', ''),
    'bluck_secret_key' => env('BLUCK_SECRET_KEY', ''),


    'course_type' => [
        \App\Enums\CourseType::Regular=>100,
        \App\Enums\CourseType::Short_Course=>1200,
        \App\Enums\CourseType::Diploma=>4800,
    ],





];
