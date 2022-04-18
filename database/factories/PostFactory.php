<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $authorIds = User::pluck('id')->all();
    return [
        'body' => $faker->sentence,
        'title' => $faker->word,
        'author_id' => $faker->randomElement($authorIds)

    ];
});
