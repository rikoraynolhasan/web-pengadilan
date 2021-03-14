<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Buku;
use Faker\Generator as Faker;

$factory->define(Buku::class, function (Faker $faker) {

    return [
        'kode_buku' => $faker->word,
        'judul_buku' => $faker->word,
        'pegarang' => $faker->word,
        'kota_terbit' => $faker->word,
        'tahun_terbit' => $faker->word,
        'cet_edisi_jilid' => $faker->word,
        'no_klas' => $faker->word,
        'sumber_pengadaan' => $faker->word,
        'eks' => $faker->word,
        'rak' => $faker->word,
        'sipnosis' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
