$(function () {
    $("#modal-addbook-confirm").click(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'POST',
                url: '/client/add/book',
                data: {'client_id': '1', 'book_id': $("#selectBook").val()},
                success: function (response) {
                    $('#modal-addbook').modal('hide');
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('Error ajax addbook'); //TODO
                }
            });
        }
    );
});