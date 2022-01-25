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
        this.countdown();
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

    countdown()
    {
        $(document).ready(function(){
        	//
          (function(e){
        		e.fn.countdown = function (t, n){
        			function i(){
        				eventDate = Date.parse(r.date) / 1e3;
        				currentDate = Math.floor(e.now() / 1e3);
        				//
        				if(eventDate <= currentDate){
        					n.call(this);
        					clearInterval(interval)
        				}
        				//
        				seconds = eventDate - currentDate;
        				days = Math.floor(seconds / 86400);
        				seconds -= days * 60 * 60 * 24;
        				hours = Math.floor(seconds / 3600);
        				seconds -= hours * 60 * 60;
        				minutes = Math.floor(seconds / 60);
        				seconds -= minutes * 60;
        				//
        				days == 1 ? thisEl.find(".timeRefDays").text("dagen") : thisEl.find(".timeRefDays").text("dagen");
        				hours == 1 ? thisEl.find(".timeRefHours").text("uren") : thisEl.find(".timeRefHours").text("uren");
        				minutes == 1 ? thisEl.find(".timeRefMinutes").text("minuten") : thisEl.find(".timeRefMinutes").text("minuten");
        				seconds == 1 ? thisEl.find(".timeRefSeconds").text("seconden") : thisEl.find(".timeRefSeconds").text("seconden");
        				//
        				if(r["format"] == "on"){
        					days = String(days).length >= 2 ? days : "0" + days;
        					hours = String(hours).length >= 2 ? hours : "0" + hours;
        					minutes = String(minutes).length >= 2 ? minutes : "0" + minutes;
        					seconds = String(seconds).length >= 2 ? seconds : "0" + seconds
        				}
        				//
        				if(!isNaN(eventDate)){
        					thisEl.find(".days").text(days);
        					thisEl.find(".hours").text(hours);
        					thisEl.find(".minutes").text(minutes);
        					thisEl.find(".seconds").text(seconds)
        				}
                else{
                  errorMessage = "Invalid date. Example: 27 March 2015 17:00:00";
        					alert(errorMessage);
        					console.log(errorMessage);
        					clearInterval(interval)
        				}
        			}
        			//
        			var thisEl = e(this);
        			var r = {
        				date: null,
        				format: null
        			};
        			//
        			t && e.extend(r, t);
        			i();
        			interval = setInterval(i, 1e3)
        		}
        	})(jQuery);
        	//
        	$(document).ready(function(){
        		function e(){
        			var e = new Date;
        			e.setDate(e.getDate() + 60);
        			dd = e.getDate();
        			mm = e.getMonth() + 1;
        			y = e.getFullYear();
        			futureFormattedDate = mm + "/" + dd + "/" + y;
        			return futureFormattedDate
        		}
        		//
        		$("#countdown").countdown({
        			date: "25 February 2022 07:00:00", // change date/time here - do not change the format!
        			format: "on"
        		});
        	});
        });
    },
}
