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

	        Jenissurat::create([
	            'name' => 'surat pernyataan tidak menerima beasiswa dari instansi manapun',
	            'detail' => '["keperluan"]',
	        ]);

	        Jenissurat::create([
	            'name' => 'surat keterangan kelakuan baik',
	            'detail' => '["keperluan"]',
	        ]);

	         Jenissurat::create([
	            'name' => 'surat pengajuan observasi',
	            'detail' => '["mata kuliah, tempat observasi"]',
	        ]);

	         Jenissurat::create([
	            'name' => 'surat bimbingan skripsi',
	            'detail' => '["tanggal disetujui, judul skripsi, pembimbing"]',
	        ]);

	         Jenissurat::create([
	            'name' => 'surat izin penelitian',
	            'detail' => '["nama tempat penelitian, alamat (kota/provinsi)"]',
	        ]);

	         Jenissurat::create([
	            'name' => 'surat praktek kerja lapangan',
	            'detail' => '["nama instansi/lembaga, tempat praktek"]',
	        ]);

	          Jenissurat::create([
	            'name' => 'surat keterangan lulus',
	            'detail' => '["tanggal lulus, judulskripsi, yudisium/IPK"]',
	        ]);

	          Jenissurat::create([
	            'name' => 'lainnya',
	            'detail' => '["nama surat, keperluan"]',
	        ]);
	    }
    }
}
