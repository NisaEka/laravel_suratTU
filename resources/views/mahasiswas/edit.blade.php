@extends('cms::layouts.dashboard')
@section('content')
	<div class="">
	    {{ Session::get('message') }}
	</div>

	<div class="container">

	    {!! Form::model($mahasiswa, ['route' => ['mahasiswas.update', $mahasiswa->id], 'method' => 'patch']) !!}

	    @form_maker_object($mahasiswa, FormMaker::getTableColumns('mahasiswas'))

	    {!! Form::submit('Update') !!}

	    {!! Form::close() !!}
	</div>
@stop