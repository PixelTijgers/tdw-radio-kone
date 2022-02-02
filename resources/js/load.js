module.exports = {

    init()
    {
        this.initAjax();
        $(this.onDOMLoad.bind(this));
    },

    initAjax()
    {
        $.ajaxSetup({
            header: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
        });
    },

    onDOMLoad()
    {
        this.scrollToTop();
        this.setOnePageNav();
        this.setMobileNav();
    },

    scrollToTop()
    {
        // declare variable
        var scrollTop = $('.scrollTop');

        $(window).scroll(function() {
            // declare variable
            var topPos = $(this).scrollTop();

            // if user scrolls down - show scroll to top button
            if (topPos > 100) {
                $(scrollTop).css('opacity', '1');

            } else {
                $(scrollTop).css('opacity', '0');
            }

        }); // scroll END

        //Click event to scroll to top
        $(scrollTop).click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            return false;

        }); // click() scroll top EMD
    },

    setOnePageNav()
    {
        $('#nav-desktop').onePageNav({
            currentClass: 'current',
            changeHash: false,
            scrollSpeed: 750,
            scrollThreshold: 0.5,
            filter: '',
            easing: 'swing',
            begin: function() {
                //Hack so you can click other menu items after the initial click
                $('body').append('<div id="device-dummy" style="height: 1px;"></div>');
            },
            end: function() {
                $('#device-dummy').remove();
            }
        });
    },

    setMobileNav()
    {
        $('nav a#toggle').click(function(e) {
            e.preventDefault();

            $('ul').slideToggle(200, function() {
                // Animation complete.
            });
        });

        $('nav ul').onePageNav({
            currentClass: 'current',
            changeHash: false,
            scrollSpeed: 750,
            scrollThreshold: 0.5,
            filter: '',
            easing: 'swing',
            begin: function() {
                //Hack so you can click other menu items after the initial click
                $('body').append('<div id="device-dummy" style="height: 1px;"></div>');

                $('nav ul').slideToggle(200, function() {
                    // Animation complete.
                });

            },
            end: function() {
                $('#device-dummy').remove();
            }
        });
    },
}
