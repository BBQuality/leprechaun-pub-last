@php
$items = [
    route('index') => 'Головна',
    route('menu') => 'Наше Меню',
    route('contact') => 'Контакти',
    route('login') => 'Log in',
    route('register') => 'Реєстрація',
    route('policy') => 'Юридична інформація',
    route('terms') => 'Обов`язки',
];
@endphp



<div class="box"> 
    

 <nav>
    <ul class="flex-column gap-4">
        <li>
        @foreach ($items as $href => $label)
            <x-nav-item :$href>{{ $label }}</x-nav-item>
        @endforeach
        </li>                
    </ul>
</nav> 
</div>