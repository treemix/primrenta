
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



});
