<div class="">
    {{ Session::get('message') }}
</div>

<div class="container">

    {!! Form::model($pejabat, ['route' => ['pejabats.update', $pejabat->id], 'method' => 'patch']) !!}

    @form_maker_object($pejabat, FormMaker::getTableColumns('pejabats'))

    {!! Form::submit('Update') !!}

    {!! Form::close() !!}
</div>
