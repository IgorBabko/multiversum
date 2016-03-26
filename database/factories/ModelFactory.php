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
        'name'         => $faker->word(2),
        'description'  => join("<br>", $faker->paragraphs(mt_rand(8, 10))),
        'published_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
        'image'        => '06iGwM4W2dzix4HNwtYAqrUY7wMsh7k3.jpg',
        // 'youtube_id'         => $faker->url,
    ];
});

$factory->define(Multiversum\Post::class, function (Faker\Generator $faker) {
    return [
        'name'         => join(" ", $faker->words(3)),
        'content'      => join("<br>", $faker->paragraphs(mt_rand(8, 10))),
        'image'        => 'Qo7PFPpE3Yx2PbdvYKbGlTB6kWYW0hGG.jpg', //$faker->imageUrl($width = 1024, $height = 768),
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
        'image'        => 'fSS3Y1pb5HUYgTKkKImqSbMSTp0ahXoV.jpg', //$faker->imageUrl($width = 220, $height = 250),
        'price'        => $faker->randomNumber(2),
        'published_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
    ];
});

$factory->define(Multiversum\Disk::class, function (Faker\Generator $faker) {
    return [
        'name'         => $faker->word(2),
        'description'  => join("<br>", $faker->paragraphs(mt_rand(8, 10))),
        'image'        => '06iGwM4W2dzix4HNwtYAqrUY7wMsh7k3.jpg', //$faker->imageUrl($width = 270, $height = 220),
        'published_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
        'price'        => $faker->randomNumber(2),
    ];
});
