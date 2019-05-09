<?php
/*
|--------------------------------------------------------------------------
| Mahasiswa Factory
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Mahasiswa::class, function (Faker\Generator $faker) {
    return [
        'id' => '1',
		'nim' => '1',
		'nama' => '1',
		'jurusan' => '1',
		'semester' => '1',
		'tempatlahir' => '1',
		'tanggallahir' => '1',
		'telp' => '1',
		'user_id' => '1',
    ];
});
