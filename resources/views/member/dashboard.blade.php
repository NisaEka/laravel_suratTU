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
            <div class="col-md-5">
              <div class="jumbotron" style="background:#0f69d7; color:#ffffff; height:290px; padding:20px;">
                  <h2>Selamat Datang</h2>
                  
                  <p> Anda Login Sebagai : <b>{{ Auth::user()->name }}</b>. </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="jumbotron" style="height:290px; padding:20px;">
                  <!-- <canvas id="canvas" height="280" width="600"></canvas> -->
                   <canvas id="dashboardChart" class="raw100"></canvas>
              </div>
            </div>
        </div>

        
    </div>

@stop
