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
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(Multiversum\Video::class, function (Faker\Generator $faker) {
    return [
        'title'        => $faker->word(2),
        'type'         => 'preview',
        'url'          => 'https://s3.eu-central-1.amazonaws.com/multiversum/previews/%D0%90%D0%BD%D0%BE%D0%BD%D1%81.+%D0%A0%D0%B5%D0%B8%D0%BD%D0%BA%D0%B0%D1%80%D0%BD%D0%B0%D1%86%D0%B8%D1%8F+%2C+%D0%B8%D0%BB%D0%B8+%D0%BE%D1%87%D0%B5%D1%80%D0%B5%D0%B4%D0%BD%D0%BE%D0%B8%CC%86+%D0%BF%D1%80%D0%B8%D1%85%D0%BE%D0%B4+%D1%87%D0%B5%D0%BB%D0%BE%D0%B2%D0%B5%D0%BA%D0%B0+%D0%BD%D0%B0+%D0%97%D0%B5%D0%BC%D0%BB%D1%8E.mp4',
        'description'  => join("<br>", $faker->paragraphs(mt_rand(1, 2))),
        'published_at' => $faker->dateTimeBetween('-2 month', '-1 days'),
    ];
});
