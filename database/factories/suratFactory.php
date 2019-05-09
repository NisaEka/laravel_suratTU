<?php
/*
|--------------------------------------------------------------------------
| Surat Factory
|--------------------------------------------------------------------------
*/

$factory->define(App\Models\Surat::class, function (Faker\Generator $faker) {
    return [
        'id' => '1',
		'mhs_id' => '1',
		'jenissurat' => '1',
		'detail' => 'laboriosam odit provident aut',
    ];
});
