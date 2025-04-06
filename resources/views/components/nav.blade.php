@php
$items = [
    route('index') => 'Головна',
    route('contact') => 'Контакти',
    route('account') => 'Log in',
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