<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\JobCategory;
use Faker\Generator as Faker;

$factory->define(JobCategory::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->randomElement([
            'Software Development',
            'Mobile',
            'Web',
            'Data Science',
            'Security',
        ])
    ];
});
