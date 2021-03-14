<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Transaksi;
use Faker\Generator as Faker;

$factory->define(Transaksi::class, function (Faker $faker) {

    return [
        'kode_peminjaman' => $faker->word,
        'tanggal_peminjaman' => $faker->word,
        'tanggal_pengembalian' => $faker->word,
        'status' => $faker->word,
        'denda' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'anggotass_id' => $faker->randomDigitNotNull,
        'bukus_id' => $faker->randomDigitNotNull,
        'users_id' => $faker->randomDigitNotNull
    ];
});
