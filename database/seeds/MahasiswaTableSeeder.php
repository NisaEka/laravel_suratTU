<?php

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Mahasiswa::where('id', '1')->first()) {

	        Mahasiswa::create([
	        	'nim' => '1167050001',
	            'nama' => 'Ahmad',
	            'jurusan' => '1',
	            'semester' => '6',
	            'tempatlahir' => 'Jakarta',
	            'tanggallahir' => '1997-01-01',
	            'telp' => '081000000000',
	            'user_id' => '2'
	        ]);
	    }

    }
}
