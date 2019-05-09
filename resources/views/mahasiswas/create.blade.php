<div class="">
    {{ Session::get('message') }}
</div>

<div class="container">

    {!! Form::open(['route' => 'mahasiswas.store']) !!}

    @form_maker_table("mahasiswas")

    {!! Form::submit('Save') !!}

    {!! Form::close() !!}

</div>