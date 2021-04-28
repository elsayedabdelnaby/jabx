"use strict";

// Class definition
var KTUserEdit = function () {
    // Base elements

    var initChangeAdminUserPasswordForm = function () {
        let form = document.getElementById('kt_edit_adminuser_password_form');
        let formValidation = FormValidation.formValidation(
           form , {
                fields: {
                    current_password: {
                        validators: {
                            notEmpty: {
                                message: 'Current Password is required'
                            },
                            different: {
                                compare: function() {
                                    return form.querySelector('[name="new_password"]').value;
                                },
                                message: 'The New Password and Current Password cannot be the same as each other'
                            }
                        }
                    },
                    new_password: {
                        validators: {
                            notEmpty: {
                                message: 'New Password is required'
                            },
                            stringLength: {
                                min:5,
                                message: 'Password must be at least 5 characters'
                            },
                            different: {
                                compare: function() {
                                    return form.querySelector('[name="current_password"]').value;
                                },
                                message: 'The New Password and Current Password cannot be the same as each other'
                            }
                        }
                    },
                    new_password_confirmation: {
                        validators: {
                            identical: {
                                compare: function() {
                                    return form.querySelector('[name="new_password"]').value;
                                },
                                message: 'The password and its verify are not the same'
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
        form.querySelector('[name="new_password"]').addEventListener('input', function() {
            formValidation.revalidateField('new_password_confirmation');
        });
    }

    var initEditUserForm = function () {
        let form = document.getElementById('kt_edit_adminuser_form');
        let formValidation = FormValidation.formValidation(
            form , {
                 fields: {
                     name: {
                         validators: {
                             notEmpty: {
                                 message: 'Name is required'
                             },
                         }
                     },
                     email: {
                         validators: {
                             notEmpty: {
                                 message: 'Email is required'
                             },
                             emailAddress: {
								message: 'The value is not a valid email address'
							}
                         }
                     },
                     role: {
						validators: {
							notEmpty: {
								message: 'Please select role'
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
            initChangeAdminUserPasswordForm();
            initEditUserForm();
        }
    };
}();

jQuery(document).ready(function () {
    KTUserEdit.init();
});
