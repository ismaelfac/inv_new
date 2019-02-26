<?php

use Faker\Generator as Faker;
use \App\Post;
$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'slug' => 'Title',
       'content' => $faker->paragraph,
        'pending' => true,
        'score' => 1,
        'user_id' => function () {
            return factory(\App\User::class)->create()->id;
        },
        'category_id' => function () {
            return factory(\App\Category::class)->create()->id;
        },
    ];
});