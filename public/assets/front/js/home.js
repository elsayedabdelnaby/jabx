"use strict";

/* function add_subscribe_mail() {

    let subscribe_mail = $('#contactemail').val();

    if (subscribe_mail == '') {
        $('#subscribe-message').addClass('text-danger');
        $('#subscribe-message').text('Please Enter Your Email');
    } else {
        let _token = $('meta[name="csrf-token"]').attr('content');
        let url = $('#subscribers_store_url').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': _token
            }
        });
        $.ajax({
            type: "POST",
            url: url,
            data: {
                email: subscribe_mail,
            },
            processData: !1,
            contentType: !1,
            success: function (e) {
                console.log(e);
                $('#subscribe-message').removeClass('text-danger');
                $('#subscribe-message').addClass('text-success');
                $('#subscribe-message').text('Thank you for your subscribtion');
            },
            error: function (e) {
                $('#subscribe-message').removeClass('text-success');
                $('#subscribe-message').addClass('text-danger');
                $('#subscribe-message').text('Sorry, Something Happen!');
            }
        });
    }
} */

$('#submit-subscriber').click(function (event) {
    event.preventDefault();

    let email = $('#contactemail').val();

    if (email == '') {
        $('#subscribe-message').addClass('text-danger');
        $('#subscribe-message').text('Please Enter Your Email');
    } else {
        let _token = $('meta[name="csrf-token"]').attr('content');
        let url = $('#subscribers_store_url').val();
        $.ajax({
            url: url,
            type: "POST",
            data: {
                email: email,
                _token: _token
            },
            success: function (response) {
                $('#subscribe-message').removeClass('text-danger');
                $('#subscribe-message').addClass('text-success');
                $('#subscribe-message').text(response.msg);
            },
            error: function (e) {
                $('#subscribe-message').removeClass('text-success');
                $('#subscribe-message').addClass('text-danger');
                $('#subscribe-message').text('Sorry, Something Happen!');
            }
        });
    }
});