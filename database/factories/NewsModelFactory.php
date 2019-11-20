<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
    ];
});

$factory->define(App\News::class, function (Faker $faker) {
    return [
    ];
});

$factory->define(App\NewsTranslation::class, function (Faker $faker) {
    return [
        'id' => 10,
        'title' => $faker->sentence,
        'lang' => rand(0,1)?'en':'es',
        'description' => $faker->paragraph
    ];
});