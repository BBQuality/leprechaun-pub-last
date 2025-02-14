@php
$items = [
    route('index') => 'Головна',
    route('menu') => 'Наше Меню',
    route('contact') => 'Контакти',
    route('policy') => 'Юридична інформація',
    route('terms') => 'Обов`язки'
];
@endphp

<div class="w-full h-screen bg-[url('{{ asset('./images/main__img.webp') }}')] bg-center bg-cover bg-no-repeat">
    <header class="md:w-[80%] xs:w-[90%] mx-auto rounded-xl border-b-4 border-black/20 px-4 flex flex-wrap justify-evenly items-center py-4 shadow-lg">
        <div class="flex-1 flex justify-between items-center">
            <span class="py-2 px-4 bg-sky-300/20 border-2 border-dashed rounded-full text-4xl font-serif font-semibold text-gray-100">
                <x-lg-logo></x-lg-logo>
            </span>
        </div>
        <label for="menu-toggle" class="pointer-cursor md:hidden block">
            
            </label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden md:flex md:items-center md:w-auto w-full z-10" id="menu">
            <nav>
                <ul class="md:flex items-center justify-between text-base text-gray-800 pt-4 md:pt-0">
                @foreach ($items as $href => $label)
                    <x-nav-item :$href>{{ $label }}</x-nav-item>
                @endforeach
                </ul>
            </nav>
        </div>
    </header>
