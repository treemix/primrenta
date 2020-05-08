


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
    })


});
