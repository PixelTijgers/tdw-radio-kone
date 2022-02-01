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

        <h3 class="text-center text-4xl mt-10 mb-6">Seul:</h3>

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

        </div>
        <!-- end div#countdown -->

        <h4 class="text-center text-2xl mb-10 mt-8">Jusqu'à Kone on Air</h4>

        @include('fr.includes.info')

        @include('fr.includes.request')

        @include('fr.includes.hosts')

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
