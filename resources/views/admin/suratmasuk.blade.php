@extends('cms::layouts.dashboard')
@section('pageTitle') Surat Masuk @stop
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
            <h1 class="pull-left">Surat Masuk</h1>
            
        </div>

        <div class="col-lg-12">
            @if($surats->isEmpty())
                <div class="well text-center">Belum ada surat masuk</div>
            @else
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Surat</th>
                        <th width="50px">Action</th>
                    </thead>
                    <tbody>
                    @foreach($surats as $key=>$surat)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ date('d/m/Y',strtotime($surat->created_at)) }}</td>
                            <td>
                                <a href="{!! route('surats.edit', [$surat->id]) !!}">{{ app(App\Models\Jenissurat::class)->find($surat->jenissurat)->name }}</a>
                            </td>
                            <td>
                                {!! Form::model($surat, ['route' => ['surats.update', $surat->id], 'method' => 'patch']) !!}
                                <input type="hidden" name="status" value="proses">
                                <button type="submit" class="btn btn-info fa fa-pencil" name="" > Buat Surat</button> 
                                {!! Form::close() !!}

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