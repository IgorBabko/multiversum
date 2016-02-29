<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
 */

$factory->define(Multiversum\User::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->safeEmail,
        'password'       => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Multiversum\Webinar::class, function (Faker\Generator $faker) {
    return [
        'name'        => $faker->word(2),
        'description' => $faker->sentence,
        'date'        => $faker->dateTime(),
        'path'        => $faker->url,
    ];
});

$factory->define(Multiversum\Post::class, function ($faker) {
    return [
        'title'        => $faker->sentence(mt_rand(3, 10)),
        'content'      => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'img'          => $faker->url,
        'published_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
    ];
});
