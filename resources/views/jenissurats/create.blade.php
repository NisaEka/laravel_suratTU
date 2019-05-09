@extends('cms::layouts.dashboard')
@section('content')
	<div class="">
	    {{ Session::get('message') }}
	</div>

	<div class="container">

	    {!! Form::open(['route' => 'jenissurats.store']) !!}

	    @form_maker_table("jenissurats")

	    {!! Form::submit('Save') !!}

	    {!! Form::close() !!}

	</div>
@stop