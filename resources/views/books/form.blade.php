<div class="form-group @if($errors->get('title')) has-error @endif">
    {{ Form::label('title', 'Título') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'required' => true]) }}

    @if($errors->get('title'))
        @foreach($errors->get('title') as $message)
            <span class="help-block">{{ $message }}</span>
        @endforeach
    @endif
</div>

<div class="form-group @if($errors->get('price')) has-error @endif">
    {{ Form::label('price', 'Preço') }}
    {{ Form::text('price', null, ['class' => 'form-control'])}}

    @if($errors->get('price'))
        @foreach($errors->get('price') as $message)
            <span class="help-block">{{ $message }}</span>
        @endforeach
    @endif
</div>

<button class="btn btn-lg btn-primary btn-block" name="Submit" type="Submit">Confirmar</button>
