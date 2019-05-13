<?php

use Illuminate\Database\Seeder;
use App\Models\Jenissurat;

class JenissuratTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Jenissurat::where('id', '1')->first()) {

	        Jenissurat::create([
	            'name' => 'surat pernyataan aktif kuliah',
	            'detail' => '["keperluan"]',
	        ]);

	        Jenissurat::create([
	            'name' => 'surat pernyataan masih kuliah',
	            'detail' => '["nip","nama_wali","nip","pangkat","instansi"]',
	        ]);
	    }
    }
}
