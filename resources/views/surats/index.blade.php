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
            <h1 class="pull-left">Surat Masuk</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px; margin-right: 10px" href="{!! route('surats.create') !!}">Buat Surat</a>
        </div>

        <div class="col-lg-12">
            @if($surats->isEmpty())
                <div class="well text-center">No surats found.</div>
            @else
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Surat</th>
                        <th>Status</th>
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
                                @if($surat->status == 'masuk')
                                <button class="btn btn-default fa fa-envelope"> Pengajuan terkirim</button>
                                @elseif($surat->hasread == '1')
                                <button class="btn btn-info fa fa-envelope-o"> Pengajuan terkirim</button>
                                @elseif($surat->status == 'proses')
                                <button class="btn btn-warning fa fa-hourglass"></button>
                                @else
                                <button class="btn btn-success fa fa-envelope-o"></button>
                                @endif

                            </td>
                            <td>
                                <a href="{!! route('surats.edit', [$surat->id]) !!}"><i class="btn btn-info fa fa-pencil"></i></a>
                                <form method="post" action="{!! route('surats.destroy', [$surat->id]) !!}">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                    <button type="submit" class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete this surat?')"><i class="fa fa-trash"></i> </button>
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