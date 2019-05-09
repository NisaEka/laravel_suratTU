<div class="">
    {{ Session::get('message') }}
</div>

<div class="container">

    {!! Form::open(['route' => 'jurusans.store']) !!}

    @form_maker_table("jurusans")

    {!! Form::submit('Save') !!}

    {!! Form::close() !!}

</div>