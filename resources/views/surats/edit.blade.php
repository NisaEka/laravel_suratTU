@extends('cms::layouts.dashboard')
@section('pageTitle') 
	@if(Auth::user()->hasRole('admin'))
	Informasi Surat
	@else
	Edit Surat 
	@endif
@stop

@section('content')
	<div class="">
	    {{ Session::get('message') }}
	</div>

	<div class="container">

	    {!! Form::model($surat, ['route' => ['surats.update', $surat->id], 'method' => 'patch']) !!}

	    @foreach(app(App\Models\Mahasiswa::class)->where('id', $surat->mhs_id)->get() as $mahasiswa)
                @input_maker_create('mhs_id', ['type' => 'hidden', 'default_value' => $mahasiswa->id])

			    @input_maker_label('Nama : ')
                @input_maker_create('', ['type' => 'string', 'default_value' => $mahasiswa->nama,'custom'=>'readonly'])

                @input_maker_label('Program Studi : ')
                @input_maker_create('', ['type' => 'string', 'default_value' => app(App\Models\Jurusan::class)->find($mahasiswa->jurusan)->name,'custom'=>'readonly'])

                @input_maker_label('NIM : ')
                @input_maker_create('', ['type' => 'string', 'default_value' => $mahasiswa->nim,'custom'=>'readonly'])

                @input_maker_label('Tempat, Tanggal lahir : ')
                @input_maker_create('', ['type' => 'string', 'default_value' => $mahasiswa->tempatlahir.', '.$mahasiswa->tanggallahir,'custom'=>'readonly'])

                @input_maker_label('Alamat/telp : ')
                @input_maker_create('', ['type' => 'string', 'default_value' => $mahasiswa->alamat,' / '.$mahasiswa->telp,'custom'=>'readonly'])

			@endforeach

		    @input_maker_label('Memohon Dibuatkan Surat : ')

		    @input_maker_create('jenissurat', ['type' => 'relationship', 'model' => 'App\Models\Jenissurat', 'label' => 'name', 'value' => 'id','options' => ['---------- Pilih Jenis Surat ---------' => '',], 'custom'=>['onchange="det(this.value)"']], $surat)

		    <!-- detail surat -->
		    <div id="detail_surat" class="detail_surat">

			    @input_maker_label('Detail Surat : ')

			    @foreach(json_decode(app(App\Models\Jenissurat::class)->find(1)->detail) as $detail)

			    	@input_maker_create('detail',['type'=>'textarea','placeholder'=>$detail],$surat)

			    @endforeach
			</div>
		@if(!Auth::user()->hasRole('admin'))
	    {!! Form::submit('Update') !!}
	    @endif
	    {!! Form::close() !!}
	</div>
@stop