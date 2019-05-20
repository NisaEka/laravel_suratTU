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
	            'detail' => '["mata_kuliah,tempat_observasi"]',
	        ]);

	         Jenissurat::create([
	            'name' => 'surat bimbingan skripsi',
	            'detail' => '["tanggal_disetujui,judul_skripsi,pembimbing"]',
	        ]);

	         Jenissurat::create([
	            'name' => 'surat izin penelitian',
	            'detail' => '["nama_tempat_penelitian,alamat_(kota/provinsi)"]',
	        ]);

	         Jenissurat::create([
	            'name' => 'surat praktek kerja lapangan',
	            'detail' => '["nama_instansi/lembaga,tempat_praktek"]',
	        ]);

	          Jenissurat::create([
	            'name' => 'surat keterangan lulus',
	            'detail' => '["tanggal_lulus,judul_skripsi,yudisium/IPK"]',
	        ]);

	          Jenissurat::create([
	            'name' => 'lainnya',
	            'detail' => '["nama_surat,keperluan"]',
	        ]);
	    }
    }
}
