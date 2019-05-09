<div class="container">

    <div class="">
        {{ Session::get('message') }}
    </div>

    <div class="row">
        <div class="pull-right">
            {!! Form::open(['route' => 'jurusans.search']) !!}
            <input class="form-control form-inline pull-right" name="search" placeholder="Search">
            {!! Form::close() !!}
        </div>
        <h1 class="pull-left">Jurusans</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('jurusans.create') !!}">Add New</a>
    </div>

    <div class="row">
        @if($jurusans->isEmpty())
            <div class="well text-center">No jurusans found.</div>
        @else
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th width="50px">Action</th>
                </thead>
                <tbody>
                @foreach($jurusans as $jurusan)
                    <tr>
                        <td>
                            <a href="{!! route('jurusans.edit', [$jurusan->id]) !!}">{{ $jurusan->name }}</a>
                        </td>
                        <td>
                            <a href="{!! route('jurusans.edit', [$jurusan->id]) !!}"><i class="fa fa-pencil"></i> Edit</a>
                            <form method="post" action="{!! route('jurusans.destroy', [$jurusan->id]) !!}">
                                {!! csrf_field() !!}
                                {!! method_field('DELETE') !!}
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this jurusan?')"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="row">
                {!! $jurusans; !!}
            </div>
        @endif
    </div>
</div>