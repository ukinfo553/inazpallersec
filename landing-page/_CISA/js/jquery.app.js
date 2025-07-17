! function($) {
    "use strict";

    var EvralApp = function() {};

    //scroll
    EvralApp.prototype.initNavbarStickey = function() {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll >= 50) {
                    $(".sticky").addClass("darkheader");
                } else {
                    $(".sticky").removeClass("darkheader");
                }
            });
        },

        EvralApp.prototype.initMagnificPopup = function() {
            $('.video-play-icon-trigger').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        },

        EvralApp.prototype.initNavbarToggler = function() {
            var scroll = $(window).scrollTop();

            $('.navbar-toggle').on('click', function(event) {
                $(this).toggleClass('open');
                $('#navigation').slideToggle(400);
            });

            $('.navigation-menu>li').slice(-2).addClass('last-elements');

            $('.menu-arrow,.submenu-arrow').on('click', function(e) {
                if ($(window).width() < 992) {
                    e.preventDefault();
                    $(this).parent('li').toggleClass('open').find('.submenu:first').toggleClass('open');
                }
            });
        },

        EvralApp.prototype.initTestimonialSlider = function() {
            $('#owl-demo').owlCarousel({
                items: 1,
                autoplay: true,
                itemsDesktop: [1199, 1],
                itemsDesktopSmall: [979, 1]
            });
        },

        EvralApp.prototype.initSmoothLink = function() {
            $('.navigation-menu a').on('click', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 0
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });
        },

        EvralApp.prototype.initScrollspy = function() {
            $("#navigation").scrollspy({
                offset: 50
            });
        },
        EvralApp.prototype.initContactUs = function() {
            $('#contact-form').submit(function() {
                var action = $(this).attr('action');
                $("#message").slideUp(750, function() {
                    $('#message').hide();

                    $('#submit')
                        .before('<img src="images/ajax-loader.gif" class="contact-loader" />')
                        .attr('disabled', 'disabled');

                    $.post(action, {
                            name: $('#name').val(),
                            email: $('#email').val(),
                            comments: $('#comments').val(),
                        },
                        function(data) {
                            document.getElementById('message').innerHTML = data;
                            $('#message').slideDown('slow');
                            $('#cform img.contact-loader').fadeOut('slow', function() {
                                $(this).remove()
                            });
                            $('#submit').removeAttr('disabled');
                            if (data.match('success') != null) $('#cform').slideUp('slow');
                        }
                    );

                });

                return false;

            });
        },

        EvralApp.prototype.init = function() {
            this.initNavbarStickey();
            this.initMagnificPopup();
            this.initNavbarToggler();
            this.initTestimonialSlider();
            this.initSmoothLink();
            this.initScrollspy();
            this.initContactUs();
        },
        //init
        $.EvralApp = new EvralApp, $.EvralApp.Constructor = EvralApp
}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.EvralApp.init();
}(window.jQuery);;