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
        'role_id' => $num = $faker->numberBetween(1, 3)
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Immeuble::class, function (Faker\Generator $faker) {
    $communes = ['Lubumbashi', 'Rwashi', 'Annexe', 'Katuba', 'Kamalondo'];
    $quartier = ['Makomeno', 'Lido', 'Luano', 'Bongonga', 'Kalubwe', 'Belair', 'Baudouin'];
    $types = ['Résidentiel', 'Socio-culturel', 'Commercial'];
    return [
        'ville' => $faker->city,
        'commune' => $commune = $faker->randomElement($communes),
        'quartier' => $quartier = $faker->randomElement($quartier),
        'avenue' => $faker->streetName,
        'numero' => $faker->buildingNumber,
        'type_usage' => $type_usage = $faker->randomElement($types),
        'nombre_pieces' => $faker->randomDigitNotNull,
        'superficie' => $faker->randomDigitNotNull,
        'montant_garantie' => $faker->numberBetween(200, 1500),
        'montant_loyer' => $faker->numberBetween(50, 400),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'description' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        'verified' => $verified = $faker->randomElement([App\Immeuble::UNVERIFIED_IMMEUBLE, App\Immeuble::VERIFIED_IMMEUBLE]),
        'bailleur_id' => $id = App\User::where('role_id', 3)->get()->random(1)->first()->id
    ];
});
