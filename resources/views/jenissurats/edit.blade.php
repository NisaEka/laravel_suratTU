@extends('cms::layouts.dashboard')
@section('content')
	<div class="">
	    {{ Session::get('message') }}
	</div>

	<div class="container">

	    {!! Form::model($jenissurat, ['route' => ['jenissurats.update', $jenissurat->id], 'method' => 'patch']) !!}

	    @form_maker_object($jenissurat, FormMaker::getTableColumns('jenissurats'))

	    {!! Form::submit('Update') !!}

	    {!! Form::close() !!}
	</div>
@stop