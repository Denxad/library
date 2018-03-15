<div class="modal fade" id="modal-addpayment">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Quantidade a pagar</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    {{ Form::label('amount', 'Quantidade:') }} <br>
                    <?= Form::text('amount', null, ['class' => 'form-control', 'id' => 'amount'])?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="modal-addpayment-close" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                <button class="btn btn-primary" id="modal-addpayment-confirm" name="Submit" type="Submit">Confirmar</button>
            </div>
        </div>
    </div>
</div>
