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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


// generated by scaffold - Project - start
$factory->define(App\Project::class, function (Faker\Generator $faker) {
    return [
        'parent_id' => $faker->numberBetween($min=1,$max=9),
        'name' => $faker->name,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
// end

// generated by scaffold - Task - start
$factory->define(App\Task::class, function (Faker\Generator $faker) {
    return [
        'parent_id' => $faker->numberBetween($min=1,$max=9),
        'name' => $faker->name,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
// end

// generated by scaffold - Task - start
$factory->define(App\Task::class, function (Faker\Generator $faker) {
    return [
        'parent_id' => $faker->numberBetween($min=1,$max=9),
        'project_id' => $faker->numberBetween($min=1,$max=9),
        'name' => $faker->name,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
// end

// generated by scaffold - AppleType - start
$factory->define(App\AppleType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});
// end

// generated by scaffold - Apple - start
$factory->define(App\Apple::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'apple_type_id' => $faker->numberBetween($min=1,$max=9),
    ];
});
// end