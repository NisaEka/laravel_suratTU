@extends('cms::layouts.dashboard')

@section('pageTitle') Users: Edit @stop

@section('content')

    <div class="col-md-12 mt-4">
        @if (! Session::get('original_user'))
            <a class="btn btn-outline-primary float-right" href="{{ url('/admin/users/switch/'. $user->id) }}">Login as this User</a>
        @endif
    </div>
    <div class="col-md-12 mt-4">
        <form method="POST" action="{{ url('/admin/users/'. $user->id) }}">
            <input name="_method" type="hidden" value="PATCH">
            {!! csrf_field() !!}

            <div class="mt-3">
                @input_maker_label('Email')
                @input_maker_create('email', ['type' => 'string'], $user)
            </div>

            <div class="mt-3">
                @input_maker_label('Name')
                @input_maker_create('name', ['type' => 'string'], $user)
            </div>

            <div class="mt-3">
                @input_maker_label('nim')
                @input_maker_create('nim', ['type' => 'string'], $user)
            </div>

            <div class="mt-3">
                @input_maker_label('jurusan')
                @input_maker_create('jurusan', ['type' => 'relationship', 'model' => 'App\Models\Jurusan', 'label' => 'name', 'value' => 'id','options' => ['---------- Pilih Jenis Surat ---------' => '',]],$user)
            </div>

            <div class="mt-3">
                @input_maker_label('semester')
                @input_maker_create('semester', ['type' => 'string'], $user)
            </div>

            <div class="mt-3">
                @input_maker_label('tempat lahir')
                @input_maker_create('tempatlahir', ['type' => 'string'], $user)
            </div>

            <div class="mt-3">
                @input_maker_label('tanggal lahir')
                @input_maker_create('tanggallahir', ['type' => 'string'], $user)
            </div>

            <div class="mt-3">
                @input_maker_label('telp.')
                @input_maker_create('telp', ['type' => 'string'], $user)
            </div>

           <!--  @include('user.meta')

            <div class="mt-3">
                @input_maker_label('Role')
                @input_maker_create('roles', ['type' => 'relationship', 'model' => 'App\Models\Role', 'label' => 'label', 'value' => 'name'], $user)
            </div> -->

            <div class="mt-4">
                <a class="btn btn-secondary float-left" href="{{ URL::previous() }}">Cancel</a>
                <button class="btn btn-primary float-right" type="submit">Save</button>
            </div>
        </form>
    </div>

@stop
