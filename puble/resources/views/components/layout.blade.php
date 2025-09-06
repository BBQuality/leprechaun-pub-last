<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content='PUB "Лепрекон" – ірландський паб...'>
    <meta name="keywords" content="PUB Лепрекон, ...">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/icons/favicon-16x16.png') }}">
    <link rel="icon" type="image/ico" sizes="16x16" href="{{ asset('/icons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('/icons/site.webmanifest') }}">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    @vite(['../../css/app.css', '../../css/custom.css','../../js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="block" style="background-image: url({{ asset('./images/drk_hero.webp') }});">

    <x-header></x-header>

@isset($slides)
        <x-hero :slides="$slides" />
@endisset

    <main class="block">
        {{ $slot }}
    </main>

    <x-line-img></x-line-img>
    <x-footer></x-footer>
</body>
</html>
