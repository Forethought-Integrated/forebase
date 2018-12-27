<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'user_id'=>	int,
        'menu_type'=>description,
    ];
});
