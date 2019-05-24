@extends('cms::layouts.dashboard')
@section('content')
	<div class="">
	    {{ Session::get('message') }}
	</div>

	<div class="container row">

		<div class="col-lg-12">
			<h1 class="pull-left">Form Pengajuan Surat</h1>
		</div>

		<div class="col-lg-12">
		    {!! Form::open(['route' => 'surats.store']) !!}
		    <!-- identitas mahasiswa -->
			@foreach(app(App\Models\User::class)->where('id', Auth::user()->id)->get() as $mahasiswa)
                @input_maker_create('mhs_id', ['type' => 'hidden', 'default_value' => $mahasiswa->id])

			    @input_maker_label('Nama : ')
                @input_maker_create('', ['type' => 'string', 'default_value' => $mahasiswa->name,'custom'=>'readonly'])

                @input_maker_label('Program Studi : ')
                @input_maker_create('', ['type' => 'string', 'default_value' => app(App\Models\Jurusan::class)->find($mahasiswa->jurusan)->name,'custom'=>'readonly'])

                @input_maker_label('NIM : ')
                @input_maker_create('', ['type' => 'string', 'default_value' => $mahasiswa->nim,'custom'=>'readonly'])

                @input_maker_label('Tempat, Tanggal lahir : ')
                @input_maker_create('', ['type' => 'string', 'default_value' => $mahasiswa->tempatlahir.', '.$mahasiswa->tanggallahir,'custom'=>'readonly'])

                @input_maker_label('Alamat/telp : ')
                @input_maker_create('', ['type' => 'string', 'default_value' => $mahasiswa->alamat,' / '.$mahasiswa->telp,'custom'=>'readonly'])

			@endforeach

		    @input_maker_label('Mohon Dibuatkan Surat : ')

		    @input_maker_create('jenissurat', ['type' => 'relationship', 'model' => 'App\Models\Jenissurat', 'label' => 'name', 'value' => 'id','options' => ['---------- Pilih Jenis Surat ---------' => '',], 'custom'=>['onchange="det(this.value)"']])

		    <!-- detail surat -->
		    <div id="detail_surat" class="detail_surat">

			    @input_maker_label('Detail Surat : ')

			    @foreach(json_decode(app(App\Models\Jenissurat::class)->find(1)->detail) as $detail)

			    	@input_maker_create('detail',['type'=>'textarea'])

			    @endforeach
			</div>

		    {!! Form::submit('Save') !!}

		    {!! Form::close() !!}
		</div>

	</div>

	<script type="text/javascript">
		function det(_id) {	
			$.ajax({
				type:'GET',
				url:'{{url("jenissurats.detailForm")}}',
				data:{
					id: _id
				}
				success::function(data){
					$("#detail_surat").html(data);
					alert(data);
				}
			});
		}
	</script>
@stop