<?php
/*
|--------------------------------------------------------------------------
| Pejabat Factory
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Pejabat::class, function (Faker\Generator $faker) {
    return [
        'id' => '1',
		'name' => 'qui',
		'jabatan' => 'non',
		'nip' => 'laboriosam',
    ];
});
