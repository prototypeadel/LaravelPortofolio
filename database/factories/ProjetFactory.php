<?php

use Faker\Generator as Faker;

$factory->define(App\Projet::class, function (Faker $faker) {
    return [
        'titre' => $faker->sentence(rand(4,8)),
        'contenu' => $faker->paragraph(rand(10,15))
    ];
});

// d abord migration puis factory puis Seeder puis dataBase seeder