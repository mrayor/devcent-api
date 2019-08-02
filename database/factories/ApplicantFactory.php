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
        'phone' => $faker->phoneNumber,
        'payment_mode' => $faker->randomElement(array('Card', 'Cash', 'Bank')),
        'course_id' => $faker->numberBetween(1, 5),
        'course_name' => $faker->sentence(7),
        'amount_due' => $faker->numberBetween(10000, 50000),
        'application_id' => Str::random(10),
    ];
});
