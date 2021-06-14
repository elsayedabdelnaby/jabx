"use strict";

// Class definition
var KTUserEdit = function () {
    // Base elements

    var initEditSiteSettingsForm = function () {
        let form = document.getElementById('aboutus_edit_form');
        let formValidation = FormValidation.formValidation(
            form, {
                fields: {
                    ourmission: {
                        validators: {
                            notEmpty: {
                                message: 'Our Mission is required'
                            }
                        }
                    },
                    why_choose_us: {
                        validators: {
                            notEmpty: {
                                message: 'Why Choose Us is required'
                            }
                        }
                    },
                    what_we_do: {
                        validators: {
                            notEmpty: {
                                message: 'What We Do is required'
                            }
                        }
                    },
                    main_section_title: {
                        validators: {
                            notEmpty: {
                                message: 'Main Section Title is required'
                            }
                        }
                    },
                    main_section_description: {
                        validators: {
                            notEmpty: {
                                message: 'Main Section Description is required'
                            }
                        }
                    },
                    meta_title: {
                        validators: {
                            notEmpty: {
                                message: 'Meta Title is required'
                            }
                        }
                    },
                    meta_keywords: {
                        validators: {
                            notEmpty: {
                                message: 'Meta Keywords is required'
                            }
                        }
                    },
                    meta_description: {
                        validators: {
                            notEmpty: {
                                message: 'Meta Description is required'
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