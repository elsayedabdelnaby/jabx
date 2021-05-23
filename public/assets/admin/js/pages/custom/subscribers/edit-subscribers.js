"use strict";

// Class definition
var KTUserEdit = function () {
    // Base elements

    var initEditSiteSettingsForm = function () {
        let form = document.getElementById('subscriber_create_form');
        let formValidation = FormValidation.formValidation(
            form, {
                fields: {
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Subscriber email required'
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