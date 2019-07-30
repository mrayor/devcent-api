<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Applicant;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Applicant::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'payment_mode' => $faker->randomElement(array('Card', 'Cash', 'Bank')),
        'course_id' => $faker->numberBetween(1, 5),
        'application_id' => Str::random(10),
    ];
});
