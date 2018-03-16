$(function () {
    $("#modal-addbook-confirm").click(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var id = $("#addbook").attr('data-idmember');

            $.ajax({
                method: 'POST',
                url: '/member/add/book',
                data: {'member_id': id, 'book_id': $("#selectBook").val()},
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

$(function () {
    $("#modal-addpayment-confirm").click(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var id = $("#addpayment").attr('data-idmember');

            $.ajax({
                method: 'POST',
                url: '/member/add/payment',
                data: {'member_id': id, 'amount': $("#amount").val()},
                success: function (response) {
                    $('#modal-addpayment').modal('hide');
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    location.reload(true); //TODO ajax request instead of forcing reload
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    console.log(XMLHttpRequest);
                }
            });
        }
    );
});