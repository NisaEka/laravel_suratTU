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
                'name' => 'Matematika',
            ]);
            Jurusan::create([
                'name' => 'Biologi',
            ]);
            Jurusan::create([
                'name' => 'Fisika',
            ]);
            Jurusan::create([
                'name' => 'Kimia',
            ]);
	        Jurusan::create([
	            'name' => 'Teknik Informatika',
	        ]);
            Jurusan::create([
                'name' => 'Agroteknologi',
            ]);
            Jurusan::create([
                'name' => 'Teknik Elektro',
            ]);
	        
	    }
    }
}
