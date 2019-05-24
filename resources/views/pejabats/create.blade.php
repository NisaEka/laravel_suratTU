<div class="">
    {{ Session::get('message') }}
</div>

<div class="container">

    {!! Form::open(['route' => 'pejabats.store']) !!}

    @form_maker_table("pejabats")

    {!! Form::submit('Save') !!}

    {!! Form::close() !!}

</div>