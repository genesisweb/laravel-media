<?php

use Faker\Generator as Faker;
use GenesisWeb\Media\Models\Media;

$factory->define(Media::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'file_name' => 'file-name.png',
        'disk' => config('media.disk'),
        'mime_type' => 'image/png',
        'size' => $faker->randomNumber(4),
    ];
});
