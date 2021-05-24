"use strict";

// Class definition
var KTUserEdit = function () {
    // Base elements

    var initEditSiteSettingsForm = function () {
        let form = document.getElementById('contact-us-form');
        let formValidation = FormValidation.formValidation(
            form, {
                fields: {
                    contactname: {
                        validators: {
                            notEmpty: {
                                message: 'Contact Name is required'
                            }
                        }
                    },
                    contactemail: {
                        validators: {
                            emailAddress: {
                                message: 'The Contact email must be in email format'
                            },
                            notEmpty: {
                                message: 'The Contact email is required'
                            }
                        }
                    },
                    contactmessage: {
                        validators: {
                            notEmpty: {
                                message: 'Message is required'
                            }
                        }
                    },
                },

                plugins: { //Learn more: https://formvalidation.io/guide/plugins
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap(),
                    // Validate fields when clicking the Submit button
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    // Submit the form when all fields are valid
                    defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
                }
            }
        );
    }

    return {
        // public functions
        init: function () {
            initEditSiteSettingsForm();
        }
    };
}();

jQuery(document).ready(function () {
    KTUserEdit.init();
});

$('.submit-contactus').click(function (event) {
    event.preventDefault();
    let _token = $('meta[name="csrf-token"]').attr('content');
    let contact_name = $('#contactname').val();
    let contact_email = $('#contactemail').val();
    let contact_message = $('#contactmessage').val();
    let url = $('#contact-us-store').val();

    $.ajax({
        url: url,
        type: "POST",
        data: {
            contact_name: contact_name,
            contact_email: contact_email,
            contact_message: contact_message,
            _token: _token
        },
        success: function (response) {
            $('#subscribe-message').removeClass('text-danger');
            $('#subscribe-message').addClass('text-success');
            $('#subscribe-message').text(response.msg);
            $('#contactname').val('');
            $('#contactemail').val('');
            $('#contactmessage').val('');
        },
        error: function (e) {
            $('#subscribe-message').removeClass('text-success');
            $('#subscribe-message').addClass('text-danger');
            $('#subscribe-message').text('Sorry, Something Happen!');
        }
    });
});