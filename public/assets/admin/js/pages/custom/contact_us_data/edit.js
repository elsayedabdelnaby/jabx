"use strict";

// Class definition
var KTUserEdit = function () {
    // Base elements

    var initEditSiteSettingsForm = function () {
        let form = document.getElementById('contact_us_data_edit_form');
        let formValidation = FormValidation.formValidation(
            form, {
                fields: {
                    address_title: {
                        validators: {
                            notEmpty: {
                                message: 'Address Title is required'
                            }
                        }
                    },
                    address_link: {
                        validators: {
                            uri: {
                                message: 'The address link address is not valid'
                            }
                        }
                    },
                    working_times: {
                        validators: {
                            notEmpty: {
                                message: 'Working Times is required'
                            }
                        }
                    },
                    phone_1: {
                        validators: {
                            notEmpty: {
                                message: 'Primary Phone is required'
                            },
                            phone: {
                                country: 'US',
                                message: 'The Primary Phone value is not a valid phone number'
                            }
                        }
                    },
                    phone_2: {
                        validators: {
                            phone: {
                                country: 'US',
                                message: 'The Secondary Phone value is not a valid phone number'
                            }
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
                    facebook_link: {
                        validators: {
                            uri: {
                                message: 'The facebook link address is not valid'
                            }
                        }
                    },
                    instagram_link: {
                        validators: {
                            uri: {
                                message: 'The instagram link address is not valid'
                            }
                        }
                    },
                    twitter_link: {
                        validators: {
                            uri: {
                                message: 'The twitter link address is not valid'
                            }
                        }
                    },
                    linkedin_link: {
                        validators: {
                            uri: {
                                message: 'The linkedin link address is not valid'
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