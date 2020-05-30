
let addressesMap;


if(window.app !== undefined && window.app.map_container !== undefined){
    if(window.app.is_home !== undefined && window.app.is_home === true){
        ymaps.ready(initHomeMap);
    }else if(window.app.is_task_new !== undefined && window.app.is_task_new === true){
        ymaps.ready(initAddressesMap);
    }



}

function initHomeMap() {
    addressesMap = new ymaps.Map(window.app.map_container, {
        center: [55.76, 37.64], // Москва
        zoom: 10,
        minZoom: 3,
        maxZoom: 18,
        behaviors:["default"],
        controls:[]
    });
}


function initAddressesMap () {

    addressesMap = new ymaps.Map('NewTaskMapContainer', {
        center: [55.76, 37.64], // Москва
        zoom: 18,
        minZoom: 3,
        maxZoom: 18,
        behaviors:["default"],
        controls:[]
    });

    addressesMap.controls.add("zoomControl",{position:{top:10,left:10}});

    //addressesMap.container.fitToViewport();

    // $('#tabs').bind('tabsshow', function (event, ui) {
    //     addressesMap.container.fitToViewport();
    // });

    ymaps.geocode("Нижний Новгород", {
        results: 1
    }).then(function (result) {
        console.log(result);
    },function (error) {
        console.log(error);
    });
}



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
function TaskNewCategory() {

    this.document = $(document);
    this.parentCategorySelect = this.document.find('#category-parent');
    this.childCategorySelect = this.document.find('#category-child');
    this.btnShowPrivateInfoBlock = this.document.find('.js-btnShowPrivateInfoBlock');
    this.privateInfoBlock = this.document.find('.js-rowPrivateInfo');
    this.btnAddressesAdd = this.document.find('.b-task-manage-addresses__add.js-btnAdd');
    this.addressesItemsBlock = this.document.find('.b-task-manage-addresses__items.js-items');

    this.btnUploaderMedia = this.document.find("#uploader_media_btn");
    this.inputFileUploaderMedia = this.document.find("#uploader_media_input_file");


    this.objParentCategorySelect = null;
    this.objChildCategorySelect = null;



    this.init();
}
TaskNewCategory.prototype = {
    init: function () {
        let _this = this;

        //_this.initParentCategorySelect();

        _this.events();

        //$(document).trigger("select:init:change:by:input");
    },

    events: function () {
        let _this = this;

        _this.parentCategorySelect.on("change", function (event) {
            //$(document).trigger("select:category:refresh");
            let _parent_slug = _this.parentCategorySelect.find("option:selected").attr("data-slug");
            let _child_slug = _this.childCategorySelect.find("option:selected").attr("data-slug");

            window.location.href = "/tasks/new/"+_parent_slug;
        });
        _this.childCategorySelect.on("change", function (event) {
            //$(document).trigger("select:category:refresh");
            let _parent_slug = _this.parentCategorySelect.find("option:selected").attr("data-slug");
            let _child_slug = _this.childCategorySelect.find("option:selected").attr("data-slug");

            window.location.href = "/tasks/new/"+_parent_slug+"/"+_child_slug;
        });
        //
        // $(document).on("select:init:change:by:input", function () {
        //     let _parent_id = $(document).find("input[name=parent_id]").val();
        //     let _parent_name = $(document).find("input[name=parent_name]").val();
        //     if(parseInt(_parent_id) > 0){
        //         let newOption = new Option(_parent_name, _parent_id, true, true);
        //         _this.objParentCategoriesSelect.append(newOption);
        //         _this.objParentCategoriesSelect.trigger('change');
        //     }
        // });


        _this.btnUploaderMedia.on("click", function (event) {
            event.preventDefault();
            _this.inputFileUploaderMedia.trigger("click");
        });

        _this.inputFileUploaderMedia.on("change", function (event) {
            event.preventDefault();
            let _progressBar = _this.document.find(".upload__progressbar");
            const $_file = $(this)[0].files[0];
            const $_type = $(this)[0].files[0].type;
            let _error_block = _this.document.find(".upload__error");
            console.log($_file.type);

            if( $_type !== "image/png"
                && $_type !== "image/jpeg"
                && $_type !== "image/jpg"
                && $_type !== "image/gif"
                && $_type !== "image/bmp"
                && $_type !== "video/mov"
                && $_type !== "video/avi"
                && $_type !== "video/flv"
                && $_type !== "video/wmv"
                && $_type !== "video/mpg"
                && $_type !== "video/mp4"
            ){
                _error_block.html("ОШЫБКА!<br/> Тип файла должен быть jpeg, jpg, png, gif, bmp, mov, avi, flv, wmv, mpg, mp4.").removeClass("hidden");
                setTimeout(()=>{_error_block.addClass("hidden");}, 2000);
                return false;
            }

            if(parseInt($_file.size/1024/1024) > 100){
                _error_block.html("ОШЫБКА!<br/> Размер файла должен быть максимум 100MB.").removeClass("hidden");
                setTimeout(()=>{_error_block.addClass("hidden");}, 2000);
                return false;
            }

            let formData = new FormData();
            formData.append("file", $_file);
            formData.append("type", $_type);
            //TODO: нужно передать дополнительные параметры

            _progressBar.removeClass("hidden");

            $.ajax({
                url: "/ajax/media/upload",
                headers: {
                    'X-CSRF-TOKEN': window.xsrf_token
                },
                type: 'POST',
                data: formData,
                //dataType: false,
                //cache: false,
                contentType: false,
                processData: false,
                error: function(data) {
                    console.log(data);
                    console.log("ERROR");
                    _error_block.html("Ошыбка загрузки файла.").removeClass("hidden");
                    setTimeout(()=>{_error_block.addClass("hidden");}, 2000);
                },
                xhr: function(){
                    let xhr = $.ajaxSettings.xhr();
                    xhr.upload.addEventListener('progress', function(evt){
                        if(evt.lengthComputable) {
                            let percentComplete = Math.ceil(evt.loaded / evt.total * 100);
                            _progressBar.find(".b-progressbar__line").css({'width': percentComplete+'%'});
                        }
                    }, false);
                    return xhr;
                },
                success: function (response) {
                    setTimeout(()=>{_progressBar.addClass("hidden");}, 1000);

                    console.log(response);
                    if(response.error === undefined ){
                        if(response.data){
                            //_this.loadVideo(response.data.url);
                            //_this.input_upload_video.val("");

                        }
                    }
                    //$(document).find(".preloader-block").hide();
                }
            });

        });

        _this.document.find(".payment-newtask_row--passengers__items").on("click", ".newtask_row__toggle__link", function (event) {
            event.preventDefault();
            _this.document.find(".payment-newtask_row--passengers__items .newtask_row__toggle__item a").removeClass("i-active");
            $(this).addClass("i-active");
            _this.document.find("input[name=payment]").val($(this).attr("data-value"));
        });

        _this.document.find(".transport-newtask_row--passengers__items").on("click", ".newtask_row__toggle__link", function (event) {
            event.preventDefault();
            _this.document.find(".transport-newtask_row--passengers__items .newtask_row__toggle__item a").removeClass("i-active");
            $(this).addClass("i-active");
            _this.document.find("input[name=payment]").val($(this).attr("data-value"));
        });

        _this.document.find("select[name=date_type]").on("change", function (event) {
            event.preventDefault();
            console.log("change");
            let _val = $(this).find("option:selected").val();
            switch (_val) {
                case 'need_start_date':
                    _this.document.find(".b-task-manage-finish__wrap--period").removeClass("js-period-block");
                    _this.document.find(".b-task-manage-finish__wrap--period").removeClass("i-end");
                    _this.document.find(".b-task-manage-finish__wrap--period").addClass("js-extendedDate");
                    _this.document.find(".b-task-manage-finish__wrap--period").addClass("i-begin");
                    break;
                case 'need_end_date':
                    _this.document.find(".b-task-manage-finish__wrap--period").removeClass("js-period-block");
                    _this.document.find(".b-task-manage-finish__wrap--period").removeClass("i-begin");
                    _this.document.find(".b-task-manage-finish__wrap--period").addClass("js-extendedDate");
                    _this.document.find(".b-task-manage-finish__wrap--period").addClass("i-end");
                    break;
                case 'need_period_date':
                    _this.document.find(".b-task-manage-finish__wrap--period").removeClass("js-extendedDate");
                    _this.document.find(".b-task-manage-finish__wrap--period").removeClass("i-begin");
                    _this.document.find(".b-task-manage-finish__wrap--period").removeClass("i-end");
                    _this.document.find(".b-task-manage-finish__wrap--period").addClass("js-period-block");
                    break;
            }
        });

        // $('#NeedBeginDay__Field').datepicker({
        //     format: 'dd/mm/yyyy',
        //     language: 'ru-RU',
        //     orientation: 'bottom',
        //     autoclose: false,
        //         //useCurrent: true,
        //         startDate: new Date().toLocaleDateString(),
        //         //allowInputToggle: true,
        //         //debug: false
        // });

        $('#NeedBeginDay__Field').datetimepicker({
            format: 'L',
            locale: 'ru',
            useCurrent: true,
            minDate: moment(new Date().toLocaleDateString(), 'L'),
            //allowInputToggle: true,
            //debug: true

        });

        $('#NeedBeginTime__Field').datetimepicker({
            format: 'LT',
            locale: 'ru',
            useCurrent: true,
            //allowInputToggle: false,
            //debug: true
        });

        $('#NeedEndDay__Field').datetimepicker({
            format: 'L',
            locale: 'ru',
            useCurrent: true,
            minDate: moment(new Date().toLocaleDateString(), 'L'),
            //allowInputToggle: true,
            //debug: true
        });

        $('#NeedEndTime__Field').datetimepicker({
            format: 'LT',
            locale: 'ru',
            useCurrent: true,
            //allowInputToggle: true,
            //debug: true
        });

        $(document).on("select:category:refresh", function (event) {

        });

        $(document).on("select:category:refresh", function (event) {

        });

        _this.btnShowPrivateInfoBlock.on("click", function (event) {
            event.preventDefault();
            if(_this.privateInfoBlock.hasClass("hidden")){
                _this.privateInfoBlock.removeClass("hidden");
            }else {
                _this.privateInfoBlock.addClass("hidden");
            }
        });

        _this.privateInfoBlock.on("click", ".js-hide", function (event) {
            event.preventDefault();
            if(!_this.privateInfoBlock.hasClass("hidden")){
                _this.privateInfoBlock.addClass("hidden");
            }
        });



        _this.btnAddressesAdd.on("click", function (event) {
            event.preventDefault();

        });

        _this.addressesItemsBlock.on("click", "[data-ga=searchGeolocation]", function (event) {
            event.preventDefault();
            navigator.geolocation.getCurrentPosition(function (result) {
                console.log(result);
                ymaps.geocode("Москва").then(function (result) {
                    console.log(result);
                }).catch(function (result) {
                    console.log(result);
                });
            });

        });


    },

    initParentCategorySelect: function () {
        let _this = this;
        _this.objParentCategorySelect = _this.parentCategorySelect.selectElement({
            placeholder: "Select category",
            url: "/ajax/categories/parent",
            xsrf_token: window.xsrf_token
        });
    },
    initChildCategorySelect: function () {
        let _this = this;
        _this.objParentCategoriesSelect = _this.parentCategoriesSelect.selectElement({
            placeholder: "Select category",
            url: "/ajax/categories/child",
            xsrf_token: window.xsrf_token
        });
    }

};

new TaskNewCategory();

let request = function(options, callback) {
// - request({ method: 'GET', data: { param: 1 } }, callback); // <--- REST API request to /api endpoint by default

    let _url = "api/"+options.url;
    let _data = options.data;
    let _method = (options.method === undefined ? "POST" : options.method);
    let _headers = (options.headers === undefined ? {
        'Content-Type': 'application/json'
    } : options.headers);

    let _init_data = {
        method: _method,
        headers: _headers,
    };

    if(options.data !== undefined){
        _init_data = {
            method: _method,
            headers: _headers,
            body: JSON.stringify(options.data)
        };
    }

    return fetch(_url, _init_data)
        .then(res => {
            if (!res.ok) throw Error(res.statusText);
            return res.json();
        })
        .then(data => callback(data))
        .catch(error => console.log(error));
};









function MainApp() {

    this.body = $(document).find("body");

    this.top_menu_categories_block = false;

    this.init();

}

MainApp.prototype = {

    init: function () {
        let _this = this;

        _this.events();

    },

    events: function () {
        let _this = this;



        $(document).on("click", ".js-index-tasks-categories__parent_detailed", function (event) {
            event.preventDefault();
            $(this).addClass('hidden');
            $(this).parent().find(".js-index-tasks-categories__child_items").removeClass('hidden');
        });

        $(document).on("click", ".open-menu-categories", function (event) {
            event.preventDefault();
            $(document).find(".top-menu-categories-block").show();
            _this.top_menu_categories_block = true;
        });


        $(document).find(".top-menu-categories-block .parent-item").hover(function (event) {
            event.preventDefault();
            let _this_in = $(this);
            $(document).find(".top-menu-categories-block .parent-item").removeClass("active");
            _this_in.addClass('active');
            _this_in.mouseout(function (event) {
                event.preventDefault();
                $(document).find(".top-menu-categories-block .parent-item").removeClass("active");
            });
            _this_in.find(".child").mouseout(function (event) {
                event.preventDefault();
                $(document).find(".top-menu-categories-block .parent-item").removeClass("active");
            });
            _this_in.find(".child").mouseover(function (event) {
                event.preventDefault();
                _this_in.addClass("active");
            });
        });


        $(document).on("click", function (event) {
            //event.preventDefault();

            //console.log(event.target);
            //console.log($(event.target).hasClass("open-menu-categories"));
            if(!$(event.target).hasClass("open-menu-categories") && _this.top_menu_categories_block){
                $(document).find(".top-menu-categories-block").hide();
                _this.top_menu_categories_block = false;
            }

        });
    },

};

let _MainApp = new MainApp();

function MobileMenu() {

    this.ToggleMenuButton = $(document).find("#ToggleMenuButton");
    this.MobileToggleNavigationHelper = $(document).find("#MobileToggleNavigationHelper");
    this.MobileLeftNavigation = $(document).find("#MobileLeftNavigation");
    this.body = $(document).find("body");


    this.init();

}

MobileMenu.prototype = {

    init: function () {
        let _this = this;

        _this.events();

    },

    events: function () {
        let _this = this;

        _this.ToggleMenuButton.on("click", function (event) {
            event.preventDefault();
            console.log( "Event: ToggleMenuButton - click" );

            _this.menu_show();
        });

        _this.MobileLeftNavigation.on("click", ".close-btn", function (event) {
            event.preventDefault();
            console.log( "Event: MobileLeftNavigation.close-btn - click" );
            _this.menu_hide();
        });

        _this.MobileToggleNavigationHelper.on("click", function (event) {
            event.preventDefault();
            console.log( "Event: MobileLeftNavigation.close-btn - click" );
            _this.menu_hide();
        });

        $( window ).resize(function (event) {
            console.log( "Event: resize" );
            _this.menu_hide();
        })

    },

    menu_show: function () {
        let _this = this;
        if(!_this.body.hasClass("overflow-hide")){
            _this.MobileToggleNavigationHelper.removeClass("hidden");
            _this.MobileLeftNavigation.removeClass("hidden");
            _this.body.addClass("overflow-hide");
        }

    },
    menu_hide: function () {
        let _this = this;
        if(_this.body.hasClass("overflow-hide")){
            _this.MobileToggleNavigationHelper.addClass("hidden");
            _this.MobileLeftNavigation.addClass("hidden");
            _this.body.removeClass("overflow-hide");
        }

    },

};

let _MobileMenu = new MobileMenu();

jQuery( document ).ready(function($) {
    console.log( "ready!" );

    let _input_password = $(document).find("input[type=password]");
    let _is_visible_password = false;

    $(document).find("#agree_terms").change(function (event) {
        event.preventDefault();
        if($(this).prop("checked") === true){
            $(document).find(".auth-registration").prop("disabled", false)
        }
        else if($(this).prop("checked") === false){
            $(document).find(".auth-registration").prop("disabled", true)
        }
    });
    $(document).find(".pass-toggle").click(function (event) {
        event.preventDefault();
        if (_is_visible_password === false) {
            _is_visible_password = true;
            _input_password.attr("type", "text");
            $(this).addClass("is-visible");
        }else{
            _is_visible_password = false;
            _input_password.attr("type", "password");
            $(this).removeClass("is-visible");
        }
        console.log(".pass-toggle");
    });

    _input_password.focus(function (event) {
        event.stopPropagation();
        event.preventDefault();
        if ($(this).attr("type") === "text" && _is_visible_password === false) {
            $(this).attr("type", "password");
        }
    });

    $(document).on("click", ".navigation-link", function (event) {
        if($(event.target).hasClass("is-disabled")) return false;
    });

    $(document).on("click", ".b-task-widget .b-task-block__faq__item", function (event) {
        event.preventDefault();
        let dialog_task_faq = $(document).find("#dialog-task-faq");
        let _index = $(this).attr("data-faq");

        dialog_task_faq.find(".faq-item-"+_index+" .b-task-block__faq__question").addClass("i-open");
        dialog_task_faq.find(".faq-item-"+_index+" .b-task-block__faq__answer").removeClass("hidden");
        $("body").addClass("i-dialog");
        dialog_task_faq.fadeIn();
    });

    $(document).on("click", ".dialog .dialog__close.js-dialog-close", function (event) {
        event.preventDefault();
        let dialog_task_faq = $(document).find("#dialog-task-faq");


        dialog_task_faq.fadeOut();

        setTimeout(function () {
            dialog_task_faq.find(".b-task-block__faq__question").removeClass("i-open");
            dialog_task_faq.find(".b-task-block__faq__answer").addClass("hidden");
            $("body").removeClass("i-dialog");
        }, 500);

    });

    $(document).on("click", ".dialog .b-task-block__faq__item", function (event) {
        event.preventDefault();
        let dialog_task_faq = $(document).find("#dialog-task-faq");
        let _index = $(this).attr("data-faq");
        dialog_task_faq.find(".faq-item-"+_index+" .b-task-block__faq__question").addClass("i-open");
        dialog_task_faq.find(".faq-item-"+_index+" .b-task-block__faq__answer").removeClass("hidden");
    });




    let tippyInstances = tippy('.js-hint',{
        allowHTML: true,
        placement: 'right',
        delay: 100,
        interactive: true
    });


});
