<?php

use App\User;
use Faker\Generator as Faker;

/* @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Meeting::class, function (Faker $faker) {
    return [
        'start_date' => $faker->dateTimeBetween('now', '+1 year'),
        'location' => $faker->city,
        'title' => $faker->words(5, true),
        'host_id' => factory(User::class)->create()->id,
    ];
});

$factory->state(App\Meeting::class, 'past', function (Faker $faker) {
    return [
        'start_date' => $faker->date(),
    ];
});
