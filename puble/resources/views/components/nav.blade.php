@php
$items = [
    route('index') => 'Home',
    route('menu') => 'Menu',
    route('contact') => 'Contact',
    route('login') => 'Login',
    route('register') => 'Register',
    route('policy') => 'Policy',
    route('terms') => 'Terms',
];
@endphp


<nav>
    <ul class="flex gap-8">
        <li>
        @foreach ($items as $href => $label)
            <x-nav-item :$href>{{ $label }}</x-nav-item>
        @endforeach
        </li>                
    </ul>
</nav>
