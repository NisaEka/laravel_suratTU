@extends('cms::layouts.dashboard')
@section('content')
    <div class="container row">

        <div class="">
            {{ Session::get('message') }}
        </div>

        <div class="col-lg-12">
            <div class="pull-right">
                {!! Form::open(['route' => 'mahasiswas.search']) !!}
                <input class="form-control form-inline pull-right" style="margin-top: 25px"  name="search" placeholder="Search">
                {!! Form::close() !!}
            </div>
            <h1 class="pull-left">Mahasiswas</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px; margin-right: 10px" href="{!! route('mahasiswas.create') !!}">Add New</a>
        </div>

        <div class="col-lg-12">
            @if($mahasiswas->isEmpty())
                <div class="well text-center">No mahasiswas found.</div>
            @else
                <table class="table">
                    <thead>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th width="50px">Action</th>
                    </thead>
                    <tbody>
                    @foreach($mahasiswas as $mahasiswa)
                        <tr>
                            <td>{{$mahasiswa->nim}}</td>
                            <td>{{$mahasiswa->nama}}</td>
                            <td>
                                <a href="{!! route('mahasiswas.edit', [$mahasiswa->id]) !!}">{{ $mahasiswa->name }}</a>
                            </td>
                            <td>
                                <a href="{!! route('mahasiswas.edit', [$mahasiswa->id]) !!}"><i class="fa fa-pencil"></i> Edit</a>
                                <form method="post" action="{!! route('mahasiswas.destroy', [$mahasiswa->id]) !!}">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this mahasiswa?')"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="row">
                    {!! $mahasiswas; !!}
                </div>
            @endif
        </div>
    </div>
@stop