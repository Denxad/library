<div class="form-group">
    <?= Form::label('title', 'Título'); ?>
    <?= Form::text('title', null, ['class' => 'form-control', 'required' => true]) ?>
</div>

<div class="form-group">
    <?= Form::label('price', 'Preço'); ?>
    <?= Form::text('price', null, ['class' => 'form-control'])?>
</div>

<button class="btn btn-lg btn-primary btn-block" name="Submit" value="Login" type="Submit">Confirmar</button>
