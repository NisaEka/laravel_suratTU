<?php

use Illuminate\Database\Seeder;
use App\Models\Jurusan;
class JurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Jurusan::where('id', '1')->first()) {

	        Jurusan::create([
	            'name' => 'Teknik Informatika',
	        ]);

	        Jurusan::create([
	            'name' => 'Teknik Elektro',
	        ]);
	    }
    }
}
