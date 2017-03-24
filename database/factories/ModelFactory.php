<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Frog::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'date_of_birth' => $faker->dateTime,
        'date_of_dead' => $faker->numberBetween(0, 1) ? $faker->dateTime : null,
        'dad_id' => $faker->dateTime,
        'mom_id' => $faker->dateTime,
        'gender' => $faker->numberBetween(0, 1),
        'last_feed' => $faker->dateTimeBetween('-10 days'),
        'hunger_rate' => $faker->numberBetween(1,10),
    ];
});


$factory->defineAs(App\Models\Frog::class, 'ancestor_male', function (Faker\Generator $faker) use ($factory) {
    $frog = $factory->raw(App\Models\Frog::class);

    return array_merge($frog, [
        'gender' => 1,
        'dad_id' => 1,
        'mom_id' => 1,
        'partner_id' => 2
    ]);
});

$factory->defineAs(App\Models\Frog::class, 'ancestor_female', function (Faker\Generator $faker) use ($factory) {
    $frog = $factory->raw(App\Models\Frog::class);

    return array_merge($frog, [
        'gender' => 0,
        'dad_id' => 2,
        'mom_id' => 2,
        'partner_id' => 1
    ]);
});
$factory->defineAs(App\Models\Frog::class, 'child', function (Faker\Generator $faker) use ($factory) {
    $frog = $factory->raw(App\Models\Frog::class);

    return array_merge($frog, [
        'dad_id' => 1,
        'mom_id' => 2,
    ]);
});