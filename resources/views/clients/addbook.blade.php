<div class="modal fade" id="modal-addbook">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adicionar livro</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    {{ Form::label('books', 'Livro para adicionar') }} <br>
                    {{ Form::select('books', $books, null, ['id' => 'selectBook']) }}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="modal-addbook-close" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                <button class="btn btn-primary" id="modal-addbook-confirm" name="Submit" type="Submit">Confirmar</button>
            </div>
        </div>
    </div>
</div>
