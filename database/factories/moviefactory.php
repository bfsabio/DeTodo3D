<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title'         => $faker->word,
        'price'         => $faker->numberBetween(1,900),
        'description'   => $faker->paragraph(10)
    ];
});
//luego para usarlo
$product = factory (app\product::class)->create();
$product->save();

factory(app\product::class)->create();
factory(app\product::class)->times(50)->create();
