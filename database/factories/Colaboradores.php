<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Colaborador::class, function (Faker $faker) {
    return [
        'nome_completo'   => $faker->name,
        'data_nascimento' => $faker->dateTimeBetween('-30 years','now'),
        'email'           => $faker->safeEmail,
        'cargo_id'        => $faker->numberBetween(0,3)
    ];
});

$factory->define(App\Models\Doador::class, function (Faker $faker) {
    return [
        'nome_completo'   => $faker->name,
        'data_nascimento' => $faker->dateTimeBetween('-30 years','now'),
        'email'           => $faker->safeEmail,
    ];
});
