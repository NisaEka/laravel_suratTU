<div class="">
    {{ Session::get('message') }}
</div>

<div class="container">

    {!! Form::open(['route' => 'surats.store']) !!}

    @form_maker_table("surats")

    {!! Form::submit('Save') !!}

    {!! Form::close() !!}

</div>