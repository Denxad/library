<div class="form-group">
    <?= Form::label('name', 'Nome'); ?>
    <?= Form::text('name', null, ['class' => 'form-control', 'required' => true]) ?>
</div>

<div class="form-group">
    <?= Form::label('telemovel', 'Telemóvel'); ?>
    <?= Form::text('telemovel', null, ['class' => 'form-control'])?>
</div>

<div class="form-group">
    <?= Form::label('telefone', 'Telefone'); ?>
    <?= Form::text('telefone', null, ['class' => 'form-control'])?>
</div>

<div class="form-group">
    <?= Form::label('debt', 'Dívida'); ?>
    <?= Form::text('debt', null, ['class' => 'form-control'])?>
</div>

<button class="btn btn-lg btn-primary btn-block" name="Submit" value="Login" type="Submit">Confirmar</button>
