@php
$menu_left = [
    route('index') => 'Наверх'
];

$menu_right = [
    '#about' => 'Про нас',
    '#contact' => 'Контакти',
    '#menu-list' => 'Меню',
];

$socials = [
    'https://www.instagram.com/lepreconpub' => 'instagram',
    'https://www.facebook.com/grillpubleprekon' => 'facebook',
];
@endphp

<footer class="site-header relative text-green-900 z-10"
        style="background-image: url({{ asset('./images/header__stone.png') }}); background-size: cover; background-position: bottom center; background-repeat: no-repeat;">
  <div class="mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col md:flex-row items-center justify-between gap-6">

    <!-- Left: Contacts -->
    <div class="flex flex-col text-sm md:text-base text-center md:text-left">
      <a href="mailto:info@pub-leprekon.com" class="text-yellow-400 hover:text-yellow-500 transition">
        info@pub-leprekon.com
      </a>
      <a href="tel:+380965776303" class="text-yellow-400 hover:text-yellow-500 transition">
        +380 96 577 6303
      </a>
    </div>

    <!-- Center: Logo -->
    <div class="flex flex-col items-center">
      <div class="rounded-full bg-yellow-400 text-green-900 w-16 h-16 flex items-center justify-center shadow-md border-4 border-white/20">
        <x-lg-logo></x-lg-logo>
      </div>
      <p class="text-xs text-yellow-300 mt-2">&copy; 2025 Leprekon Pub. Усі права захищені.</p>
    </div>

    <!-- Right: Navigation + Socials -->
    <div class="flex flex-col md:flex-row items-center gap-4">

      <!-- Menus -->
      <nav class="flex flex-wrap items-center justify-center gap-4 font-medium tracking-wide text-sm uppercase">
        @foreach($menu_left as $link => $label)
          <a href="{{ $link }}" class="hover:text-green-700 transition">{{ $label }}</a>
        @endforeach
        @foreach($menu_right as $link => $label)
          <a href="{{ $link }}" class="hover:text-green-700 transition">{{ $label }}</a>
        @endforeach
      </nav>

      <!-- Socials -->
      <div class="flex items-center gap-3">
        @foreach($socials as $link => $type)
          <a href="{{ $link }}" target="_blank"
             class="w-9 h-9 flex items-center justify-center rounded-full border border-green-900 text-green-900 hover:bg-green-900 hover:text-yellow-400 transition duration-300 shadow-sm">

            @if($type === 'instagram')
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5a4.25 4.25 0 0 0 4.25-4.25v-8.5A4.25 4.25 0 0 0 16.25 3.5h-8.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7zm5.25-.75a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5z"/>
              </svg>
            @elseif($type === 'facebook')
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 5.004 3.657 9.128 8.438 9.878v-6.988h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.242 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 17.004 22 12"/>
              </svg>
            @endif
          </a>
        @endforeach
      </div>

    </div>

  </div>
</footer>
