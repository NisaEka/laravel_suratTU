@extends('cms::layouts.dashboard')
@section('content')
	<div class="">
	    {{ Session::get('message') }}
	</div>

	<div class="container">

	    {!! Form::model($surat, ['route' => ['surats.update', $surat->id], 'method' => 'patch']) !!}

	    @form_maker_object($surat, FormMaker::getTableColumns('surats'))

	    {!! Form::submit('Update') !!}

	    {!! Form::close() !!}
	</div>
@stop