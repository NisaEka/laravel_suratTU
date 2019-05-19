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

        	//Angkatan 2016
	        Mahasiswa::create([
	        	'nim' => '1167010001',
	            'nama' => 'Ahmad Imam',
	            'jurusan' => '1',
	            'semester' => '6',
	            'tempatlahir' => 'Banten',
	            'tanggallahir' => '1998-02-01',
	            'telp' => '081234567890',
	            'user_id' => '1167010001'
	        ]);

	        Mahasiswa::create([
	        	'nim' => '1167010002',
	            'nama' => 'Ilham Amadi',
	            'jurusan' => '1',
	            'semester' => '6',
	            'tempatlahir' => 'Jakarta',
	            'tanggallahir' => '1997-04-03',
	            'telp' => '081223656854',
	            'user_id' => '1167010002'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1167020001',
	            'nama' => 'Usup Alexander',
	            'jurusan' => '2',
	            'semester' => '6',
	            'tempatlahir' => 'Bandung',
	            'tanggallahir' => '1998-06-05',
	            'telp' => '083856741123',
	            'user_id' => '1167020001'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1167020002',
	            'nama' => 'Elang Grahana Putra',
	            'jurusan' => '2',
	            'semester' => '6',
	            'tempatlahir' => 'Yogyakarta',
	            'tanggallahir' => '1997-08-07',
	            'telp' => '089789100200',
	            'user_id' => '1167020002'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1167030001',
	            'nama' => 'Orlada Dena',
	            'jurusan' => '3',
	            'semester' => '6',
	            'tempatlahir' => 'Semarang',
	            'tanggallahir' => '1997-10-09',
	            'telp' => '089789103200',
	            'user_id' => '1167030001'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1167030002',
	            'nama' => 'Syafina Mawarni',
	            'jurusan' => '3',
	            'semester' => '6',
	            'tempatlahir' => 'Surabaya',
	            'tanggallahir' => '1997-12-11',
	            'telp' => '081256753891',
	            'user_id' => '1167030002'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1167040001',
	            'nama' => 'Alika Manjuntak',
	            'jurusan' => '4',
	            'semester' => '6',
	            'tempatlahir' => 'Banten',
	            'tanggallahir' => '1997-02-01',
	            'telp' => '081234567892',
	            'user_id' => '1167040001'
	        ]);

	        Mahasiswa::create([
	        	'nim' => '1167040002',
	            'nama' => 'Imron Arhamni',
	            'jurusan' => '4',
	            'semester' => '6',
	            'tempatlahir' => 'Jakarta',
	            'tanggallahir' => '1998-04-03',
	            'telp' => '081223656857',
	            'user_id' => '1167040002'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1167050001',
	            'nama' => 'Uki Victoria',
	            'jurusan' => '5',
	            'semester' => '6',
	            'tempatlahir' => 'Bandung',
	            'tanggallahir' => '1997-06-05',
	            'telp' => '083856741124',
	            'user_id' => '1167050001'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1167050002',
	            'nama' => 'El Barack',
	            'jurusan' => '5',
	            'semester' => '6',
	            'tempatlahir' => 'Yogyakarta',
	            'tanggallahir' => '1997-08-07',
	            'telp' => '089789100201',
	            'user_id' => '1167050002'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1167060001',
	            'nama' => 'Oriza Kazagawa',
	            'jurusan' => '6',
	            'semester' => '6',
	            'tempatlahir' => 'Semarang',
	            'tanggallahir' => '1998-10-09',
	            'telp' => '089789103202',
	            'user_id' => '1167050001'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1167060002',
	            'nama' => 'Syafrudin Barokah Farhan',
	            'jurusan' => '6',
	            'semester' => '6',
	            'tempatlahir' => 'Surabaya',
	            'tanggallahir' => '1997-12-11',
	            'telp' => '081256753892',
	            'user_id' => '1167030008'
	        ]);

	          Mahasiswa::create([
	        	'nim' => '1167070001',
	            'nama' => 'Jessica Lusieda',
	            'jurusan' => '7',
	            'semester' => '6',
	            'tempatlahir' => 'Singapura',
	            'tanggallahir' => '1997-12-09',
	            'telp' => '089789103209',
	            'user_id' => '1167070001'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1167070002',
	            'nama' => 'Aihara Mizuka',
	            'jurusan' => '7',
	            'semester' => '6',
	            'tempatlahir' => 'Tokyo',
	            'tanggallahir' => '1998-11-11',
	            'telp' => '081256753891',
	            'user_id' => '1167070002'
	        ]);

	         //Angkatan 2017
	          Mahasiswa::create([
	        	'nim' => '1177010001',
	            'nama' => 'Alan Suaeptri',
	            'jurusan' => '1',
	            'semester' => '4',
	            'tempatlahir' => 'Banten',
	            'tanggallahir' => '1999-02-01',
	            'telp' => '081234342870',
	            'user_id' => '1177010001'
	        ]);

	        Mahasiswa::create([
	        	'nim' => '1177010002',
	            'nama' => 'Irfanudin Mahmud Neru',
	            'jurusan' => '1',
	            'semester' => '4',
	            'tempatlahir' => 'Jakarta',
	            'tanggallahir' => '2000-04-03',
	            'telp' => '089344550009',
	            'user_id' => '1177010002'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1177020001',
	            'nama' => 'Ulandari Maesari',
	            'jurusan' => '2',
	            'semester' => '4',
	            'tempatlahir' => 'Bandung',
	            'tanggallahir' => '1999-06-05',
	            'telp' => '083850004333',
	            'user_id' => '1177020001'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1177020002',
	            'nama' => 'Ersa Maudi Putri',
	            'jurusan' => '2',
	            'semester' => '4',
	            'tempatlahir' => 'Yogyakarta',
	            'tanggallahir' => '1998-08-07',
	            'telp' => '089444100200',
	            'user_id' => '1177020002'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1177030001',
	            'nama' => 'Omasi Bamblean',
	            'jurusan' => '3',
	            'semester' => '4',
	            'tempatlahir' => 'Semarang',
	            'tanggallahir' => '1999-10-09',
	            'telp' => '089744227889',
	            'user_id' => '1177030001'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1177030002',
	            'nama' => 'Soleh Martin',
	            'jurusan' => '3',
	            'semester' => '4',
	            'tempatlahir' => 'Surabaya',
	            'tanggallahir' => '2000-12-11',
	            'telp' => '081256700145',
	            'user_id' => '1177030002'
	        ]);

	          Mahasiswa::create([
	        	'nim' => '1177040001',
	            'nama' => 'Akbar Sobari',
	            'jurusan' => '4',
	            'semester' => '4',
	            'tempatlahir' => 'Banten',
	            'tanggallahir' => '1998-02-01',
	            'telp' => '081234342872',
	            'user_id' => '1177030001'
	        ]);

	        Mahasiswa::create([
	        	'nim' => '1177040002',
	            'nama' => 'Itek Sudrajat Ningrat',
	            'jurusan' => '4',
	            'semester' => '4',
	            'tempatlahir' => 'Jakarta',
	            'tanggallahir' => '1999-04-03',
	            'telp' => '089344550001',
	            'user_id' => '1177040002'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1177050001',
	            'nama' => 'Uca Ratu Dewi',
	            'jurusan' => '5',
	            'semester' => '4',
	            'tempatlahir' => 'Bandung',
	            'tanggallahir' => '1998-06-05',
	            'telp' => '083850004332',
	            'user_id' => '1177050001'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1177050002',
	            'nama' => 'Ega Prakasa',
	            'jurusan' => '5',
	            'semester' => '4',
	            'tempatlahir' => 'Yogyakarta',
	            'tanggallahir' => '1998-08-07',
	            'telp' => '089444100202',
	            'user_id' => '1177050002'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1177060001',
	            'nama' => 'Ozi Permana Rambutan',
	            'jurusan' => '6',
	            'semester' => '4',
	            'tempatlahir' => 'Semarang',
	            'tanggallahir' => '2000-10-09',
	            'telp' => '089744227888',
	            'user_id' => '1177060001'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1177060002',
	            'nama' => 'Sapri Patrolik Muhammad',
	            'jurusan' => '6',
	            'semester' => '4',
	            'tempatlahir' => 'Surabaya',
	            'tanggallahir' => '1999-12-11',
	            'telp' => '081256700144',
	            'user_id' => '1177060002'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1177070001',
	            'nama' => 'Resti Andini Putri',
	            'jurusan' => '7',
	            'semester' => '4',
	            'tempatlahir' => 'Palembang',
	            'tanggallahir' => '1998-04-09',
	            'telp' => '089744227889',
	            'user_id' => '1177070001'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1177070002',
	            'nama' => 'Jung Hyo Mun',
	            'jurusan' => '7',
	            'semester' => '4',
	            'tempatlahir' => 'Seoul',
	            'tanggallahir' => '1999-05-17',
	            'telp' => '081256700145',
	            'user_id' => '1177070002'
	        ]);
	         
	         //Angkatan 2018
	          Mahasiswa::create([
	        	'nim' => '1187010001',
	            'nama' => 'Alamnash Dzolik Maruf',
	            'jurusan' => '1',
	            'semester' => '2',
	            'tempatlahir' => 'Banten',
	            'tanggallahir' => '2000-02-01',
	            'telp' => '081234577550',
	            'user_id' => '1187010001'
	        ]);

	        Mahasiswa::create([
	        	'nim' => '1187010002',
	            'nama' => 'Ikrar Maulanna Yusuf',
	            'jurusan' => '1',
	            'semester' => '2',
	            'tempatlahir' => 'Jakarta',
	            'tanggallahir' => '2001-04-03',
	            'telp' => '081229876534',
	            'user_id' => '1187010002'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1187020001',
	            'nama' => 'Utsman bin Affan',
	            'jurusan' => '2',
	            'semester' => '2',
	            'tempatlahir' => 'Bandung',
	            'tanggallahir' => '2001-06-05',
	            'telp' => '083856741113',
	            'user_id' => '1187020001'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1187020002',
	            'nama' => 'Erman Mangkus Sudrajat',
	            'jurusan' => '2',
	            'semester' => '2',
	            'tempatlahir' => 'Yogyakarta',
	            'tanggallahir' => '2000-08-07',
	            'telp' => '089789100210',
	            'user_id' => '1187020002'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1187030001',
	            'nama' => 'Oki Serla Lestari',
	            'jurusan' => '3',
	            'semester' => '2',
	            'tempatlahir' => 'Semarang',
	            'tanggallahir' => '2002-10-09',
	            'telp' => '089789144400',
	            'user_id' => '1187030001'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1187030002',
	            'nama' => 'Syafina Mawarni',
	            'jurusan' => '3',
	            'semester' => '2',
	            'tempatlahir' => 'Surabaya',
	            'tanggallahir' => '2001-12-11',
	            'telp' => '081256743291',
	            'user_id' => '1187030002'
	        ]);

	          Mahasiswa::create([
	        	'nim' => '1187040001',
	            'nama' => 'AlKautsar Pebrinasyah',
	            'jurusan' => '4',
	            'semester' => '2',
	            'tempatlahir' => 'Banten',
	            'tanggallahir' => '2002-02-01',
	            'telp' => '081234577500',
	            'user_id' => '1187040001'
	        ]);

	        Mahasiswa::create([
	        	'nim' => '1187040002',
	            'nama' => 'Ibrahim Lut Ismail',
	            'jurusan' => '4',
	            'semester' => '2',
	            'tempatlahir' => 'Jakarta',
	            'tanggallahir' => '2001-04-03',
	            'telp' => '081229877534',
	            'user_id' => '1187040002'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1187050001',
	            'nama' => 'Ubbanusyah Al Jufri',
	            'jurusan' => '5',
	            'semester' => '2',
	            'tempatlahir' => 'Bandung',
	            'tanggallahir' => '1999-06-05',
	            'telp' => '083856741112',
	            'user_id' => '1187050001'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1187050002',
	            'nama' => 'Eka Supriatno',
	            'jurusan' => '5',
	            'semester' => '2',
	            'tempatlahir' => 'Yogyakarta',
	            'tanggallahir' => '2000-08-07',
	            'telp' => '089789100110',
	            'user_id' => '1187050002'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1187060001',
	            'nama' => 'Ola Ramlani Sari',
	            'jurusan' => '6',
	            'semester' => '2',
	            'tempatlahir' => 'Semarang',
	            'tanggallahir' => '1999-10-09',
	            'telp' => '089789144300',
	            'user_id' => '1187060001'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1187060002',
	            'nama' => 'Syakir Daulani Bibi',
	            'jurusan' => '6',
	            'semester' => '2',
	            'tempatlahir' => 'Surabaya',
	            'tanggallahir' => '2000-12-11',
	            'telp' => '081256743299',
	            'user_id' => '1187060002'
	        ]);

	          Mahasiswa::create([
	        	'nim' => '1187070001',
	            'nama' => 'Darren Wang',
	            'jurusan' => '7',
	            'semester' => '2',
	            'tempatlahir' => 'Jakarta',
	            'tanggallahir' => '2000-10-09',
	            'telp' => '089789144300',
	            'user_id' => '1187070001'
	        ]);

	         Mahasiswa::create([
	        	'nim' => '1187070002',
	            'nama' => 'Kento Yamazaki',
	            'jurusan' => '7',
	            'semester' => '2',
	            'tempatlahir' => 'Bandung',
	            'tanggallahir' => '2001-12-11',
	            'telp' => '081256743299',
	            'user_id' => '1187070002'
	        ]);
	    }

    }
}
