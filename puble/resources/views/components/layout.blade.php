<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content='PUB "Лепрекон" – ірландський паб в самому серці сучасного Києва (станція метро "Палац Спорту"), що переносить вас у світ традицій та смаків Ірландії.  Наш паб – це атмосферне просторе місце з вишуканою кухнею та різноманіттям напоїв. Забронюйте місце на нашому сайті або за телефоном.'>
    <meta name="keywords" content="PUB Лепрекон, ПАБ, Лепрекон, Бар Лепрекон, бари Києва, паби Києва, паби Київа, бари Київа, кафе в Києві, ресторани Києва, PUB Leprekon, Bar Leprekon, поїсти, заклади Києва, відпочити в Києві, як провести вихідні, як провести вікенд? , куди піти?">
    <meta name="Derkach T." content="Leprechaun PUB">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/icons/favicon-16x16.png') }}">
    <link rel="icon" type="image/ico" sizes="16x16" href="{{ asset('/icons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('/icons/site.webmanifest') }}">  
    <link href="{{ asset('/resources/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/resources/css/custom.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
    <body class="block" style="background-image: url({{ asset('./images/drk_hero.webp') }});">
        <div class="block">
            <x-header></x-header> 
            
        </div>
        <main class="block">       
                {{ $slot }}
        </main>
            <x-footer></x-footer>
    </body>
</html>