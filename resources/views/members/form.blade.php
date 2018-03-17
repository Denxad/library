<div class="form-group @if($errors->get('name')) has-error @endif">
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'required' => true]) }}
    @if($errors->get('name'))
        @foreach($errors->get('name') as $message)
            <span class="help-block">{{ $message }}</span>
        @endforeach
    @endif
</div>

<div class="form-group @if($errors->get('telemovel')) has-error @endif">
    {{ Form::label('telemovel', 'Telemóvel') }}
    {{ Form::text('telemovel', null, ['class' => 'form-control']) }}
    @if($errors->get('telemovel'))
        @foreach($errors->get('telemovel') as $message)
            <span class="help-block">{{ $message }}</span>
        @endforeach
    @endif
</div>

<div class="form-group @if($errors->get('telefone')) has-error @endif">
    {{ Form::label('telefone', 'Telefone') }}
    {{ Form::text('telefone', null, ['class' => 'form-control']) }}
    @if($errors->get('telefone'))
        @foreach($errors->get('telefone') as $message)
            <span class="help-block">{{ $message }}</span>
        @endforeach
    @endif
</div>

<button class="btn btn-lg btn-primary btn-block" name="Submit" type="Submit">Confirmar</button>