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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    $gender = ['Masculin', 'Feminin'];
    return [
        'name' => $faker->name,
        'genre' => $gender[rand(0,1)],
        'type_compte' => $faker->word,
        'profession' => $faker->jobTitle,
        'adresse' => $faker->address,
        'telephone' => $faker->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('123456'),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Immeuble::class, function (Faker\Generator $faker) {
    $communes = ['Lubumbashi', 'Rwashi', 'Annexe', 'Katuba', 'Kamalondo'];
    $quartier = ['Makomeno', 'Lido', 'Luano', 'Bongonga', 'Kalubwe', 'Belair', 'Baudouin'];
    $types = ['Entrepot', 'Habitat', 'Location'];
    return [
        'ville' => $faker->city,
        'commune' => $faker->randomElement($communes),
        'quartier' => $faker->randomElement($quartier),
        'avenue' => $faker->streetName,
        'numero' => $faker->buildingNumber,
        'type_usage' => $faker->randomElement($types),
        'nombre_pieces' => $faker->randomDigitNotNull,
        'superficie' => $faker->randomDigitNotNull,
        'montant_garantie' => $faker->randomDigitNotNull,
        'montant_loyer' => $faker->randomDigitNotNull,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'description' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        'verified' => $verified = $faker->randomElement([App\Immeuble::UNVERIFIED_IMMEUBLE, App\Immeuble::VERIFIED_IMMEUBLE])
    ];
});
