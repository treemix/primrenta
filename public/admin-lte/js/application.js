let _GlobalCategory = null;

function Category() {

    this.CategoryDataTableId = $(document).find("#category-datatable");
    this.CategoryDataTable = null;

    this.init();
}

Category.prototype = {

    init: function () {
        let _this = this;

        _this.events();

        _this.initDataTable();

    },

    events: function () {
        let _this = this;


    },

    initDataTable: function () {
        let _this = this;

        $(document).on("category:datatable:draw", function (event) {
            if (_this.CategoryDataTable !== null) {
                _this.CategoryDataTable.draw();
                event.preventDefault();
            }
        });

        _this.CategoryDataTable = _this.CategoryDataTableId.DataTable({
            paging: true,
            lengthChange: true,
            searching: true,
            ordering: true,
            info: false,
            autoWidth: false,
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url: "/admin/ajax/categories/datatable/init",
                //data: function (data) { },
                headers: {
                    'X-CSRF-TOKEN': window.xsrf_token
                }
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'parent_id', name: 'parent_id'},
                {data: 'name', name: 'name'},
                {data: 'slug', name: 'slug'},
                {data: 'description', name: 'description'},
                {data: 'action_edit', name: 'action_edit', searchable: false, sortable: false, class: "text-center"},
                {data: 'action_delete', name: 'action_delete', searchable: false, sortable: false, class: "text-center"},
                {data: 'action_edit_page', name: 'action_edit_page', searchable: false, sortable: false, class: "text-center"}
            ],
            // initComplete: function (settings, json) {
            // },
            drawCallback: function (settings) {
                if (this.api().page.info().pages <= 1) {
                    $('#' + settings.sTableId + '_paginate').hide();
                } else {
                    $('#' + settings.sTableId + '_paginate').show();
                }
            },
            language: {
                searchPlaceholder: "Поиск",
                sSearch: "Поиск:",
                oPaginate: {
                    sPrevious: "Назад",
                    sNext: "Вперёд",
                },
                lengthMenu: "Показать _MENU_ записей",
                processing: '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Loading...</span>'
            },
            //dom: "<'row'<'col-sm-12 col-md-6'f><'col-sm-12 col-md-6'l>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            //"info": false,
            //"sort": false,
            //"searching": false,
            //"pageLength": 5,
            //"lengthChange": false
        });
    }
};





(function ($) {
    'use strict';

    _GlobalCategory = new Category();


    $(document).find('#parent_categories').select2({
        theme: 'bootstrap4',
        ajax: {
            url: "/admin/ajax/categories/parent",
            headers: {
                'X-CSRF-TOKEN': window.xsrf_token
            },
            dataType: 'json',
            delay: 250,
            // data: function (params) {
            //     return {
            //         q: params.term, // search term
            //         page: params.page
            //     };
            // },
            processResults: function (data, params) {
                // parse the results into the format expected by Select2
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data, except to indicate that infinite
                // scrolling can be used
                params.page = params.page || 1;

                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    }),
                    pagination: {
                        more: (params.page * 30) < data.total_count
                    }
                };
            },
            cache: true
        },
    })


})(jQuery);
