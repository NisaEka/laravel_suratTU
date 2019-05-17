@extends('cms::layouts.dashboard')

@section('pageTitle') Admin Dashboard @stop

@section('content')

    <div class="col-md-12 mt-4">
        <div class="row">
            @if (Session::get('original_user'))
                <a class="btn btn-dark pull-right" href="{{ url('/users/switch-back') }}">Return to your Login</a>
            @endif
        </div>
        <div class="row">
            <div class="col-lg-2">
                <div class="card card-dark text-center">
                    <div class="card-header">
                        Surat Masuk
                    </div>
                    <div class="card-body">
                        <span class="lead">{{ app(App\Models\Surat::class)->where('status','masuk')->count() }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-dark text-center">
                    <div class="card-header">
                        Sedang di proses
                    </div>
                    <div class="card-body">
                        <span class="lead">{{ app(App\Models\Surat::class)->where('status','proses')->count() }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-dark text-center">
                    <div class="card-header">
                        Surat Selesai
                    </div>
                    <div class="card-body">
                        <span class="lead">{{ app(App\Models\Surat::class)->where('status','selesai')->count() }}</span>
                    </div>
                </div>
            </div>
            
        </div>

        
    </div>

@stop
