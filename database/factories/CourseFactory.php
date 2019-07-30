<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(7),
        'description' => $faker->paragraph(2),
        'objectives' => $faker->paragraph(2),
        'eligibility' => $faker->paragraph(2),
        'schedule' => '2pm to 4pm',
        'training_instructor' => $faker->name(),
        'featured_image' => $faker->imageUrl,
        'category_id' => $faker->numberBetween(1, 10),
        'available_seats' => $faker->numberBetween(1, 20),
        'price' => $faker->numberBetween(10000, 50000),
    ];
});
