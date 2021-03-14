<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Anggota;
use Faker\Generator as Faker;

$factory->define(Anggota::class, function (Faker $faker) {

    return [
        'nama' => $faker->word,
        'tempat_lahir' => $faker->word,
        'tanggal_lahir' => $faker->word,
        'alamat' => $faker->word,
        'no_hp' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'foto' => $faker->text
    ];
});
