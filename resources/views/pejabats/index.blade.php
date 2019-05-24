@extends('cms::layouts.dashboard')

@section('pageTitle') Pejabat @stop

@section('content')
<div class="container row">

    <div class="">
        {{ Session::get('message') }}
    </div>

    <div class="col-md-12">
        <div class="pull-right">
            {!! Form::open(['route' => 'pejabats.search']) !!}
            <input class="form-control form-inline pull-right" style="margin-top: 25px"  name="search" placeholder="Search">
            {!! Form::close() !!}
        </div>
        <h1 class="pull-left">Pejabats</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px; margin-right: 10px" href="{!! route('pejabats.create') !!}">Add New</a>
    </div>

    <div class="col-md-12">
        @if($pejabats->isEmpty())
            <div class="well text-center">No pejabats found.</div>
        @else
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th width="50px">Action</th>
                </thead>
                <tbody>
                @foreach($pejabats as $pejabat)
                    <tr>
                        <td>
                            <a href="{!! route('pejabats.edit', [$pejabat->id]) !!}">{{ $pejabat->name }}</a>
                        </td>
                        <td>
                            <a href="{!! route('pejabats.edit', [$pejabat->id]) !!}"><i class="fa fa-pencil"></i> Edit</a>
                            <form method="post" action="{!! route('pejabats.destroy', [$pejabat->id]) !!}">
                                {!! csrf_field() !!}
                                {!! method_field('DELETE') !!}
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this pejabat?')"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="row">
                {!! $pejabats; !!}
            </div>
        @endif
    </div>
</div>
@stop