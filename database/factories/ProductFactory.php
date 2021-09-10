<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Company;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'company_id' => factory(Company::class),
        'image' => $faker->image(public_path('images'),400,300, null, false),
        'price' => $faker->randomFloat(2, 0, 10000),
    ];
});
