"use strict";

// Class definition
var KTProductEdit = function () {
    // Base elements

    var initEditSiteSettingsForm = function () {
        let form = document.getElementById('product_create_form');
        let formValidation = FormValidation.formValidation(
            form, {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: 'Product Name is required'
                            }
                        }
                    },
                    slug: {
                        validators: {
                            notEmpty: {
                                message: 'Product Slug is required'
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
                    meta_description: {
                        validators: {
                            notEmpty: {
                                message: 'Meta Description is required'
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
                    image: {
                        validators: {
                            notEmpty: {
                                message: 'Product Image is required'
                            }
                        }
                    },
                    description: {
                        validators: {
                            notEmpty: {
                                message: 'Product Description is required'
                            }
                        }
                    },
                    short_description: {
                        validators: {
                            notEmpty: {
                                message: 'Product Short Description is required'
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

var KTCkeditor = function () {
    // Private functions
    var demos = function () {
        ClassicEditor
            .create( document.querySelector( '#kt-ckeditor-product-description' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    }

    return {
        // public functions
        init: function() {
            demos();
        }
    };
}();

// Initialization
jQuery(document).ready(function () {
    KTProductEdit.init();
});