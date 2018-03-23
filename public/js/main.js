$(function () {
    $("[id^=addbook]").click(function () {
        var id = $(this).attr('data-idmember');
        $("#memberBookId").val(id);
    });
});

$(function () {
    $("[id^=addpayment]").click(function () {
        var id = $(this).attr('data-idmember');
        $("#memberPaymentId").val(id);
    });
});

$(function () {
    $("#modal-addbook-confirm").click(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var bookId = $("#selectBook").val();
            var memberId = $("#memberBookId").val();

            $.ajax({
                method: 'POST',
                url: '/member/add/book',
                data: {'member_id': memberId, 'book_id': bookId},
                success: function (response) {
                    $('#modal-addbook').modal('hide');
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    location.reload(true); //TODO ajax request instead of forcing reload
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('FIX ME');
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

            var memberId = $("#memberPaymentId").val();
            var amount = $("#amount").val();
            var date = $('#datepicker').val();

            $.ajax({
                method: 'POST',
                url: '/member/add/payment',
                data: {'member_id': memberId, 'amount': amount, 'payment_date': date},
                success: function (response) {
                    $('#modal-addpayment').modal('hide');
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    location.reload(true); //TODO ajax request instead of forcing reload
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    console.log(XMLHttpRequest);
                }
            });
        }
    );
});