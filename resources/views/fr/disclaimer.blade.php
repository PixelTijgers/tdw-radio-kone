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
    <!-- Admin scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>

<main class="mx-auto p-5 mb-16 sm:w-4/5 md:max-w-screen-lg md:mt-14 md:p-0">

    <div class="panel">

        <a href="{{ url()->previous() }}" class="button">Ga terug</a>

        <h3 class="md:mt-16 md:mb-3 md:text-5xl">Disclaimer</h3>
        <p>Laatste update: 25 januari 2022</p>

        <h4 class="md:mt-5 md:mb-3 md:text-xl">Privacy policy voor Kone, eigenaar van Radio Kone</h4>

            <p>Het waarborgen van de privacy van bezoekers van Radio Kone is een belangrijke taak voor ons. Daarom beschrijven we in onze privacy policy welke informatie we verzamelen en hoe we deze informatie gebruiken.</p>

        <h4 class="md:mt-5 md:mb-3 md:text-xl">Toestemming</h4>

            <p>Door de informatie en de diensten op Radio Kone te gebruiken, gaat u akkoord met onze privacy policy en de voorwaarden die wij hierin hebben opgenomen.</p>

        <h4 class="md:mt-5 md:mb-3 md:text-xl">Vragen</h4>

            <p>Als u meer informatie wilt ontvangen, of vragen hebt over de privacy policy van Kone en specifiek Radio Kone, kun u ons benaderen via e-mail. Ons e-mailadres is <a href="mailto:help@onekoneteam.be">info@onekoneteam.be</a>.</p>

        <h4 class="md:mt-5 md:mb-3 md:text-xl">Gebruik van cookies</h4>

            <p>Radio Kone plaatst cookies bij bezoekers. Dat doen we om informatie te verzamelen over de pagina’s die gebruikers op onze website bezoeken, om bij te houden hoe vaak bezoekers terug komen en om te zien welke pagina’s het goed doen op de website. Ook houden we bij welke informatie de browser deelt.</p>

        <h4 class="md:mt-5 md:mb-3 md:text-xl">Cookies uitschakelen</h4>

            <p>U kunt er voor kiezen om cookies uit te schakelen. Dat doet u door gebruik te maken de mogelijkheden van uw browser. U vindt meer informatie over deze mogelijkheden op de website van de aanbieder van uw browser.</p>

        <h4 class="md:mt-5 md:mb-3 md:text-xl">Cookies van derde partijen</h4>

            <p>Het is mogelijk dat derde partijen, zoals Google, op onze website adverteren of dat wij gebruik maken van een andere dienst. Daarvoor plaatsen deze derde partijen in sommige gevallen cookies. Deze cookies zijn niet door Radio Kone te beïnvloeden.</p>

        <h4 class="md:mt-5 md:mb-3 md:text-xl">Contact</h4>

            <p>Voor specifieke vragen kun je ook contact opnemen.</p>

            <a class="flex mt-5" href="mailto:info@onekoneteam.be">Contacteer ons</a>

    </div>

</main>

@include('fr.includes.footer', [
    'companyName' => env('CLIENT_NAME')
])
</body>
</html>
