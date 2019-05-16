@extends('cms::layouts.dashboard')

@section('pageTitle') Dashboard @stop

@section('content')

    <div class="col-md-12 mt-4">
        <div class="row">
            @if (Session::get('original_user'))
                <a class="btn btn-dark pull-right" href="{{ url('/users/switch-back') }}">Return to your Login</a>
            @endif
        </div>
        <div class="row">
            
        </div>

        
    </div>

@stop
