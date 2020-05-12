let _GlobalCategory = null;
let _GlobalNewEditCategory = null;


$.fn.selectElement = function (options) {
    options = options || {};

    this.on("update", function (event, data) {

    });

    return $(this).select2({
        theme: 'bootstrap4',
        allowClear: true,
        debug: true,
        placeholder: options.placeholder,
        ajax: {
            url: options.url,
            headers: {
                'X-CSRF-TOKEN': options.xsrf_token
            },
            dataType: 'json',
            delay: 250,
            data: function (params) {
                options.keywords = params.term;
                options.page = params.page;
                return options;
            },
            processResults: function (data, params) {
                params.page = params.page || 1;
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    }),
                    pagination: {
                        more: (params.page * 20) < data.total_count
                    }
                };
            },
            cache: true
        }
    });
};

//////////////////////////////////

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

//////////////////////////////////

function NewEditCategory() {

    this.parentCategoriesSelect = $(document).find('#parent_categories');
    this.objParentCategoriesSelect = null;

    this.init();
}
NewEditCategory.prototype = {
    init: function () {
        let _this = this;

        _this.initParentCategoriesSelect();

        _this.events();

        $(document).trigger("select:init:change:by:input");
    },

    events: function () {
        let _this = this;

        _this.objParentCategoriesSelect.on("change", function (event) {
            let _parent_id = $(this).find("option:selected").val();
            let _parent_name = $(this).find("option:selected").text();
            if(_parent_id === undefined){
                _parent_id = 0;
            }
            $(document).find("input[name=parent_id]").val(_parent_id);
            $(document).find("input[name=parent_name]").val(_parent_name);
        });

        $(document).on("select:init:change:by:input", function () {
            let _parent_id = $(document).find("input[name=parent_id]").val();
            let _parent_name = $(document).find("input[name=parent_name]").val();
            if(parseInt(_parent_id) > 0){
                let newOption = new Option(_parent_name, _parent_id, true, true);
                _this.objParentCategoriesSelect.append(newOption);
                _this.objParentCategoriesSelect.trigger('change');
            }
        });
    },

    initParentCategoriesSelect: function () {
        let _this = this;
        _this.objParentCategoriesSelect = _this.parentCategoriesSelect.selectElement({
            placeholder: "Select category",
            url: "/admin/ajax/categories/parent",
            xsrf_token: window.xsrf_token
        });
    }

};



(function ($) {
    'use strict';

    let _info_box_success = $(document).find(".info-box-success");
    if(_info_box_success.length > 0){
        setTimeout(function () {
            _info_box_success.hide();
        }, 2000);
    }


})(jQuery);
