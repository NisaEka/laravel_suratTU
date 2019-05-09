@extends('cms::layouts.dashboard')
@section('content')
    <div class="container row">

        <div class="">
            {{ Session::get('message') }}
        </div>

        <div class="col-lg-12">
            <div class="pull-right">
                {!! Form::open(['route' => 'surats.search']) !!}
                <input class="form-control form-inline pull-right" style="margin-top: 25px"  name="search" placeholder="Search">
                {!! Form::close() !!}
            </div>
            <h1 class="pull-left">Surats</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px; margin-right: 10px" href="{!! route('surats.create') !!}">Add New</a>
        </div>

        <div class="col-lg-12">
            @if($surats->isEmpty())
                <div class="well text-center">No surats found.</div>
            @else
                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th width="50px">Action</th>
                    </thead>
                    <tbody>
                    @foreach($surats as $surat)
                        <tr>
                            <td>
                                <a href="{!! route('surats.edit', [$surat->id]) !!}">{{ $surat->name }}</a>
                            </td>
                            <td>
                                <a href="{!! route('surats.edit', [$surat->id]) !!}"><i class="fa fa-pencil"></i> Edit</a>
                                <form method="post" action="{!! route('surats.destroy', [$surat->id]) !!}">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this surat?')"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="row">
                    {!! $surats; !!}
                </div>
            @endif
        </div>
    </div>
@stop