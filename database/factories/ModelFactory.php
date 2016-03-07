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
        'description' => $faker->paragraph,
        'date'        => $faker->dateTime(),
        'path'        => $faker->url,
    ];
});

$factory->define(Multiversum\Post::class, function (Faker\Generator $faker) {
    return [
        'name'         => join(" ", $faker->words(3)),
        'content'      => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'thumbnail'    => $faker->url,
        'picture'      => $faker->url,
        'published_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
    ];
});

$factory->define(Multiversum\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(Multiversum\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(Multiversum\Book::class, function (Faker\Generator $faker) {
    return [
        'name'         => $faker->word(2),
        'description'  => join("<br>", $faker->paragraphs(mt_rand(8, 10))),
        'picture'      => $faker->url,
        'price'        => $faker->randomNumber(2),
        'published_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
    ];
});

$factory->define(Multiversum\Disk::class, function (Faker\Generator $faker) {
    return [
        'name'        => $faker->word(2),
        'description' => join("\n\n", $faker->paragraphs(mt_rand(1, 2))),
        'picture'     => $faker->url,
        'price'       => $faker->randomNumber(2),
    ];
});
