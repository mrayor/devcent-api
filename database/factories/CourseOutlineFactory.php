<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\CourseOutline;
use Faker\Generator as Faker;

$factory->define(CourseOutline::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(7),
        'duration' => $faker->numberBetween(1, 5),
        'course_id' => $faker->numberBetween(1, 5),
    ];
});
