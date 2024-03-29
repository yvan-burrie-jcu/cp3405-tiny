<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name'  =>  $faker->company,
        'email' => $faker->unique()->companyEmail,
        'aboutus' => $faker->sentence,
        'address' => $faker->address,
        'website' => $faker->url,
        'image' => "profile/".basename($faker->image(storage_path("app/public/profile")))
    ];
});
