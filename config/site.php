<?php
return [
    'setting' => [
        'address' => 'Bi G49,145 Shantinagar, Dhaka 1217 Rd',
        'phone' => '01753043133',
        'email' => 'nhmti.institute@gmail.com',
         'rj_no'=>'C-198657'
    ],
    'bluck_api_key' => env('BLUCK_API_KEY', ''),
    'bluck_secret_key' => env('BLUCK_SECRET_KEY', ''),


    'course_type' => [
        \App\Enums\CourseType::Regular=>100,
        \App\Enums\CourseType::Short_Course=>1200,
        \App\Enums\CourseType::Diploma=>4800,
    ],





];
