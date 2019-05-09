@extends('cms::layouts.dashboard')
@section('content')
    <div class="container row">

        <div class="">
            {{ Session::get('message') }}
        </div>

        <div class="col-lg-12">
            <div class="pull-right">
                {!! Form::open(['route' => 'jenissurats.search']) !!}
                <input class="form-control form-inline pull-right" style="margin-top: 25px" name="search" placeholder="Search">
                {!! Form::close() !!}
            </div>
            <h1 class="pull-left">Jenissurats</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px; margin-right: 10px" href="{!! route('jenissurats.create') !!}">Add New</a>
        </div>

        <div class="col-lg-12">
            @if($jenissurats->isEmpty())
                <div class="well text-center">No jenissurats found.</div>
            @else
                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th width="50px">Action</th>
                    </thead>
                    <tbody>
                    @foreach($jenissurats as $jenissurat)
                        <tr>
                            <td>
                                <a href="{!! route('jenissurats.edit', [$jenissurat->id]) !!}">{{ $jenissurat->name }}</a>
                            </td>
                            <td>
                                <a href="{!! route('jenissurats.edit', [$jenissurat->id]) !!}"><i class="fa fa-pencil"></i> Edit</a>
                                <form method="post" action="{!! route('jenissurats.destroy', [$jenissurat->id]) !!}">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this jenissurat?')"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="row">
                    {!! $jenissurats; !!}
                </div>
            @endif
        </div>
    </div>
@stop