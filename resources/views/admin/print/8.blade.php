
	<script type="text/javascript">
		alert("tekan tombol ctrl+p untuk print file")
	</script>

	<!-- kop surat -->
	<br><br><br><br><br><br><hr>	
	<!-- kop surat -->

	<p> 
		Nomor<span style="margin-left: 21px"></span>: B-252/un.5/III.7/PP.009/{{$surat->id}}/2019<br>
		lampiran<span style="margin-left: 10px"></span>: -<br>
		perihal<span style="margin-left: 18px"></span> : <b>Permohonan Ijin Kerja Praktik</b><br>
	</p>
	<br>
	<p style="margin-left: 30px">
		Kepada Yth.<br>
		{{Str::substr($surat->detail,15)}}
	</p>

	<i style="margin-left: 100px"> Assalamu'alaikum Wr.Wb</i>
	<p style="margin-left: 50px"> <span style="margin-left: 50px"></span> Dekan fakultas Sains dan Teknologi Universitas Islam Negeri Sunan Gunung Djati Bandung menerangkan bahwa : </p>
	<p style="margin-left: 60px">
		@foreach(app(App\Models\User::class)->where('id', $surat->user_id)->get() as $mahasiswa)
		Nama<span style="margin-left: 35px"></span>: {{$mahasiswa->name}}<br>
		NIM<span style="margin-left: 42px"></span>: {{$mahasiswa->nim}}<br>
		Semester<span style="margin-left: 14px"></span>: {{$mahasiswa->semester}}<br>
		Jurusan<span style="margin-left: 23px"></span>: {{app(App\Models\Jurusan::class)->find($mahasiswa->jurusan)->name}}<br>
		@endforeach
	</p>
	<p style="margin-left: 50px">
		adalah mahasiswa aktif Fakultas Sains dan Teknologi Universitas Islam Negeri Sunan Gunung Djati Bandung Tahun Akademik 2018/2019, bermaksud melakukan Kerja Praktik pada instansi/perusahaan yang Bapak/Ibu pimpin.
	</p>
	<p style="margin-left: 50px">
		<span style="margin-left: 50px"></span>Untuk itu kami mohon agar Bapak/Ibu dapat membantu mahasiswa kami dalam pelaksanaan kegiatan dimaksud.
	</p>
	<p style="margin-left: 50px">
		<span style="margin-left: 50px"></span>Demikian surat ini kami sampaikan, atas perkenan dan kerjasamanya kami ucapkan terimakasih.
	</p>
	<i style="margin-left: 50px"> Wassalamu'alaikum Wr.Wb</i>
	
	<p style="text-align: right;">
		an. Dekan <br>
		Wakil Dekan Bidang Akademik,
		<!-- ttd space -->
		<br><br><br><br><br>
		<!-- ttd space -->
		<b>Dr. H. Cecep Hidayat., Ir., Mp.</b><br>
		NIP. 196209181998031001
	</p>
	
