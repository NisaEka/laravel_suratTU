<div class="">
    {{ Session::get('message') }}
</div>

<div class="container">

    {!! Form::model($jurusan, ['route' => ['jurusans.update', $jurusan->id], 'method' => 'patch']) !!}

    @form_maker_object($jurusan, FormMaker::getTableColumns('jurusans'))

    {!! Form::submit('Update') !!}

    {!! Form::close() !!}
</div>
