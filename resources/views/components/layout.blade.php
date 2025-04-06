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
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<style>   
@font-face {
    font-family: 'Lobster';
    src: url('/font/Lobster-Regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
} 
    /* Загальні стилі для шрифту Lobster */
    h1, h2, h3, h4, h5, h6, .logo, .accent-text {
    font-family: 'Pacifico', cursive;
    font-weight: normal;
    color: #065f46;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
}

/* Основний текст */
body {
    font-family: 'Roboto', sans-serif; /* Альтернативний шрифт для основного тексту */
    font-size: 16px;
    line-height: 1.6;
    color: #333;
}

/* Адаптивність для заголовків */
h1 {
    font-size: 2.5rem;
}

h2 {
    font-size: 2rem;
}

h3 {
    font-size: 1.75rem;
}


        html {
        width: auto;
        height: 100%;
        margin: 0 auto;
        padding: 0;
        }

        header {
            width: auto;
            max-width: 100%;
        background-color: #000c0163;
        -webkit-box-shadow: 0px -22px 67px -41px rgba(5,  119,  8, 0.5) inset;
        -moz-box-shadow: 0px -22px 67px -41px rgba(5,  119,  8, 0.5) inset;
        box-shadow: 0px -22px 67px -41px rgba(5,  119,  8, 0.5) inset;
    }
    .header {
        height: 79%; /* Або від 40vh до 60vh, залежно від дизайну */
        background-image: url('{{ asset('./images/hero__head__img.webp') }}');
        background-size: cover;
        background-position: top;
        background-repeat: no-repeat;
        background-color: rgb(39 28 3);
        padding: 0px;
        box-sizing: border-box;
    }

    
.header-hero {
        display: flex;
        box-shadow: inset 11px 12px 8px 10px rgb(139 135 128 / 52%);
        -webkit-box-shadow: -5px -9px 9px 3px rgb(139 135 128 / 52%) inset;
        -moz-box-shadow: 10px 16px 60px 20px rgb(139 135 128 / 52%) inset;
        border-radius: 36px;
        /* padding: 89px 52px; */
        box-sizing: content-box;
        flex-direction: column;
        margin-top: calc(5.8%);
}

    .backgrnd {
        background-color: #251e00;
background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23e2e05b' fill-opacity='0.45' fill-rule='evenodd'/%3E%3C/svg%3E");
    }
/* Загальні стилі */
body {
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
    background-color: #251e00;
    background-image: url("{{ asset('./images/bubbles.svg') }}");
    background-size: cover;
    background-attachment: fixed;
    color: #fff;
}

/* Заголовки */
h1, h2, h3, h4, h5, h6 {
    margin: 0;
    padding: 0;
    font-weight: 700;
    color: #FFB03B;
}

p {
    margin: 0 0 1rem;
    line-height: 1.6;
    color: #9699a6;
}

/* Кнопки */
.btn__gld {
    font-size: 17px;
    background: transparent;
    border: none;
    padding: 1em 1.5em;
    color: #ffedd3;
    text-transform: uppercase;
    position: relative;
    transition: 0.5s ease;
    cursor: pointer;
}

.btn__gld::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 2px;
    width: 0;
    background-color: #ffc506;
    transition: 0.5s ease;
}

.btn__gld:hover::before {
    width: 100%;
}

.btn__gld::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 0;
    width: 100%;
    background-color: #ffc506;
    transition: 0.4s ease;
    z-index: 1;
}

.btn__gld:hover::after {
    height: 100%;
    transition-delay: 0.4s;
    z-index: -1;
}

/* Контейнер меню */
.menu-container {
    display: grid;
    gap: 2rem;
    padding: 2rem;
    background-color: rgba(0, 0, 0, 0.8);
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

/* Адаптивність для меню */
.menu-items {
    display: grid;
    gap: 1.5rem;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
}

.menu-restaurant {
    padding: 1.5rem;
    border: 1px solid #e2e8f0;
    border-radius: 0.5rem;
    background-color: #fff;
    color: #000;
    transition: box-shadow 0.3s ease-in-out;
}

.menu-restaurant:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

/* Заголовки меню */
.menu-title {
    font-size: 1.5rem;
    font-weight: bold;
    color: #FFB03B;
    margin-bottom: 0.5rem;
}

.menu-subtitle {
    font-size: 1rem;
    color: #B1B1B1;
}

/* Медіа-запити */
@media (max-width: 1024px) {
    .menu-container {
        padding: 1.5rem;
    }

    .menu-title {
        font-size: 1.25rem;
    }
}

@media (max-width: 768px) {
    .menu-container {
        padding: 1rem;
    }

    .menu-title {
        font-size: 1rem;
    }

    .menu-items {
        grid-template-columns: 1fr;
    }

    h1 {
        font-size: 2rem;
    }

    h2 {
        font-size: 1.5rem;
    }

    h3 {
        font-size: 1.25rem;
    }
}

@media (max-width: 480px) {
    .btn__gld {
        font-size: 14px;
        padding: 0.8em 1em;
    }

    .menu-title {
        font-size: 0.9rem;
    }
}
</style>
    <body class="block" style="background-image: url({{ asset('./images/bubbles.svg') }});">

            <x-header></x-header>
        
        <main class="block">       
                {{ $slot }}
        </main>
        <x-line-img></x-line-img>
            <x-footer></x-footer>
    </body>
</html>
