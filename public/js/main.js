$(function () {
    $("#modal-addbook-confirm").click(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var id = $("#addbook").attr('data-idclient');

            $.ajax({
                method: 'POST',
                url: '/client/add/book',
                data: {'client_id': id, 'book_id': $("#selectBook").val()},
                success: function (response) {
                    $('#modal-addbook').modal('hide');
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    location.reload(true); //TODO ajax request instead of forcing reload
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR); //TODO
                }
            });
        }
    );
});