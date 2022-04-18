<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $userIds = User::pluck('id')->all();
    $postIds = Post::pluck('id')->all();
    return [
        'comment'=> $faker->sentence,
        'user_id' => $faker->randomElement($userIds),
        'post_id' => $faker->randomElement($postIds)
    ];
});
