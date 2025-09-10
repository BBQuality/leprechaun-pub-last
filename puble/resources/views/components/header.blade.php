@php
$items = [
    route('index') => 'Головна',
    route('contact') => 'Контакти',
];

$items_auth = [
    route('account') => 'Реєстрація',
];
@endphp

<header class="site-header relative bg-gradient-to-r from-transparent via-green-900 to-transparent text-white border-b-4 border-yellow-400 shadow-lg">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">

    <!-- Left: Contacts -->
    <div class="flex flex-col text-sm md:text-base text-left">
      <a href="mailto:info@pub-leprekon.com" class="text-yellow-400 hover:text-yellow-500 transition">
        info@pub-leprekon.com
      </a>
      <a href="tel:+380965776303" class="text-yellow-400 hover:text-yellow-500 transition">
        +380 96 577 6303
      </a>
    </div>

    <!-- Center: Navigation + Logo -->
    <nav class="flex items-center gap-6">
      <!-- Left menu -->
      <ul class="flex gap-4 font-medium tracking-wide text-sm uppercase">
        <li><a href="#home" class="hover:text-yellow-400">Home</a></li>
        <li><a href="#about" class="hover:text-yellow-400">About</a></li>
        <li><a href="#menu" class="hover:text-yellow-400">Menu</a></li>
      </ul>

      <!-- Logo -->
      <div class="header-logo">
        <span class="inline-flex items-center justify-center rounded-full bg-yellow-400 text-green-900 w-16 h-16 shadow-md border-4 border-white/20">
          <x-lg-logo></x-lg-logo>
        </span>
      </div>

      <!-- Right menu -->
      <ul class="flex gap-4 font-medium tracking-wide text-sm uppercase">
        <li><a href="#gallery" class="hover:text-yellow-400">Gallery</a></li>
        <li><a href="#events" class="hover:text-yellow-400">Events</a></li>
        <li><a href="#contact" class="hover:text-yellow-400">Contact</a></li>
      </ul>
    </nav>

    <!-- Right: Socials -->
    <div class="flex items-center gap-3 ml-auto">
      <!-- Instagram -->
      <a href="https://www.instagram.com/lepreconpub"
         class="w-8 h-8 flex items-center justify-center rounded-full border border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-green-900 transition duration-300 shadow-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
          <path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5a4.25 4.25 0 0 0 4.25-4.25v-8.5A4.25 4.25 0 0 0 16.25 3.5h-8.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7zm5.25-.75a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5z"/>
        </svg>
      </a>

      <!-- Facebook -->
      <a href="https://www.facebook.com/grillpubleprekon"
         class="w-8 h-8 flex items-center justify-center rounded-full border border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-green-900 transition duration-300 shadow-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
          <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 5.004 3.657 9.128 8.438 9.878v-6.988h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.242 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 17.004 22 12"/>
        </svg>
      </a>
    </div>

  </div>
</header>
ф
