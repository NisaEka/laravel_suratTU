@extends('cms::layouts.dashboard')
@section('pageTitle') Sedang di proses @stop
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
            <h1 class="pull-left">Sedang di proses</h1>
            
        </div>

        <div class="col-lg-12">
            @if($surats->isEmpty())
                <div class="well text-center">Belum ada surat di proses</div>
            @else
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Surat</th>
                        <th>File</th>
                        <th width="50px">Action</th>
                    </thead>
                    <tbody>
                    @foreach($surats as $key=>$surat)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ date('d/m/Y',strtotime($surat->updated_at)) }}</td>
                            <td>
                                <a href="{!! route('surats.edit', [$surat->id]) !!}">{{ app(App\Models\Jenissurat::class)->find($surat->jenissurat)->name }}</a>
                            </td>
                            <td>
                                <a href="{{ url('admin/print-surat',$surat->id) }}" class="btn btn-primary fa fa-print"> Print Surat</a>
                                
                            </td>
                            <td>
                                {!! Form::model($surat, ['route' => ['surats.update', $surat->id], 'method' => 'patch']) !!}
                                <input type="hidden" name="status" value="selesai">
                                <button type="submit" class="btn btn-success fa fa-check" name="" > Selesai</button> 
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