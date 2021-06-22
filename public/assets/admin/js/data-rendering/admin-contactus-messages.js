'use strict';
// Class definition

var KTDatatableDataLocalDemo = function () {

    // demo initializer
    var demo = function () {

        var datatable = $('#kt_datatable').KTDatatable({
            // datasource definition
            data: {
                type: 'local',
                source: dataJSONArray,
                pageSize: 10,
            },

            // layout definition
            layout: {
                scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                // height: 450, // datatable's body's fixed height
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: $('#kt_datatable_search_query'),
                key: 'generalSearch'
            },

            // columns definition
            columns: [{
                field: 'name',
                title: 'Name',
                autoHide: false,
            },{
                field: 'email',
                title: 'Email',
                autoHide: false,
            }, {
                field: 'message',
                title: 'Message',
                autoHide: false,
            },{
                field: 'status',
                title: 'Status',
                autoHide: false,
                // callback function support for column rendering
                template: function (row) {
                    console.log(row);
                    var status = {
                        new: {
                            'title': 'New',
                            'class': ' label-light-info'
                        },
                        pending: {
                            'title': 'Pending',
                            'class': ' label-light-danger'
                        },
                        closed: {
                            'title': 'Closed',
                            'class': ' label-light-success'
                        },
                    };
                    return '<span class="label font-weight-bold label-lg ' + status[row.status].class + ' label-inline">' + status[row.status].title + '</span>';
                },
            }, {
                field: 'Actions',
                title: 'Actions',
                sortable: false,
                autoHide: false,
                template: function (row) {
                    var host = window.location.protocol + "//" + window.location.host;
                    return '\<a href="' + host + '/admin/contactus-messages/' + row.id + '/edit" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">\
	                            <span class="svg-icon svg-icon-md">\
	                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
	                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
	                                        <rect x="0" y="0" width="24" height="24"/>\
	                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero"\ transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>\
	                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>\
	                                    </g>\
	                                </svg>\
	                            </span>\
							</a>\
						';
                },
            }],
        });

        $('#kt_datatable_search_status').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'status');
        });

        $('#kt_datatable_search_status').selectpicker();
    };

    return {
        // Public functions
        init: function () {
            // init dmeo
            demo();
        },
    };
}();

jQuery(document).ready(function () {
    KTDatatableDataLocalDemo.init();
});

/* function deleteProduct(id) {
    var host = window.location.protocol + "//" + window.location.host;
    $.ajax({
        type: "DELETE",
        url: host + "/admin/producst/" + id,
        data: {
            _method: 'DELETE',
            "id": id
        },
        success: function (response) {
            swal.fire({
                text: "Product deleted successfully",
                icon: "success",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn font-weight-bold btn-light-primary"
                }
            }).then(function () {
                $('#' + id).closest('tr').hide();
            });
        }
    });
} */