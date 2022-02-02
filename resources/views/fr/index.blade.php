<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--[if IE 7]><html lang="{{ app()->getLocale() }}" class="ie7"><![endif]-->
<!--[if IE 8]><html lang="{{ app()->getLocale() }}" class="ie8"><![endif]-->
<!--[if IE 9]><html lang="{{ app()->getLocale() }}" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><html lang="{{ app()->getLocale() }}"><![endif]-->
<!--[if !IE]><html lang="{{ app()->getLocale() }}"><![endif]-->
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Meta Beschrijving" />
    <meta name="keywords" content="Keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Admin scripts -->
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.nav.js') }}"></script>
    <script src="{{ asset('js/app.js?v=2') }}"></script>
</head>
<body>

<main class="mx-auto p-5 mb-16 sm:w-4/5 md:max-w-screen-lg md:mt-14 md:p-0">

    <div class="panel">

        @include('fr.includes.mobile')

        @include('fr.includes.header')

        @include('fr.includes.player')

        <h3 class="text-center text-4xl mt-10 mb-6">Plus que ...</h3>

        <div id="countdown" class="lg:px-16">

            <div class="cd-box w-1/4">
                <p class="numbers days text-5xl lg:text-8xl">00</p>
                <p class="strings timeRefDays">jour</p>
            </div>

            <div class="cd-box w-1/4 mx-3">
                <p class="numbers hours text-5xl lg:text-8xl">00</p>
                <p class="strings timeRefHours">heures</p>
            </div>

            <div class="cd-box w-1/4 mr-3">
                <p class="numbers minutes text-5xl lg:text-8xl">00</p>
                <p class="strings timeRefMinutes">minutes</p>
            </div>

            <div class="cd-box w-1/4">
                <p class="numbers seconds text-5xl lg:text-8xl">00</p>
                <p class="strings timeRefSeconds">secondes</p>
            </div>

            <script>

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
                            days == 1 ? thisEl.find(".timeRefDays").text("jours") : thisEl.find(".timeRefDays").text("jours");
                            hours == 1 ? thisEl.find(".timeRefHours").text("heures") : thisEl.find(".timeRefHours").text("heures");
                            minutes == 1 ? thisEl.find(".timeRefMinutes").text("minutes") : thisEl.find(".timeRefMinutes").text("minutes");
                            seconds == 1 ? thisEl.find(".timeRefSeconds").text("secondes") : thisEl.find(".timeRefSeconds").text("secondes");
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

            </script>

        </div>
        <!-- end div#countdown -->
        @include('fr.includes.info')

        @include('fr.includes.hosts')

        @include('fr.includes.request')

        <div class="scrollTop shadow-lg flex items-center justify-center">
            <span><a href="#"><i class="fas fa-angle-double-up"></i></a></span>
        </div>

    </div>

</main>

@include('fr.includes.footer', [
    'companyName' => env('CLIENT_NAME')
])
</body>
</html>
