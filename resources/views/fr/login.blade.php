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

<main class="mx-auto p-5 mb-16 sm:w-4/5 md:max-w-screen-sm md:mt-14 md:p-0">

    <div class="panel">

        <figure class="mx-auto w-8/12 -mt-8">

            <img src="{{ asset('img/logo-radio.jpg') }}" alt="Logo Radio Kone" />

        </figure>

        <h3 class="mb-3">Entrez le mot de passe</h3>
        @if(session('message'))

        <p class="alert">{{ session('message') }}</p>
        @endif

        <form method="post" action="{{ url('nl/login') }}" class="mt-5">

            @csrf

            <input type="password" name="password" placeholder="Entrez le mot de passe"/>

            <button type="submit">Envoyez</button>

        </form>

    </div>

    <div class="scrollTop shadow-lg flex items-center justify-center">
        <span><a href="#"><i class="fas fa-angle-double-up"></i></a></span>
    </div>

</main>

@include('be.includes.footer', [
    'companyName' => env('CLIENT_NAME')
])
</body>
</html>
