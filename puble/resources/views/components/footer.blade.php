@php
$items = [
    route('index') => 'Головна',
    route('contact') => 'Контакти',
];

$items_auth = [
    route(name:'account') => 'Реєстрація/Вхід',
];
@endphp
<footer class="relative bg-gradient-to-r from-transparent via-green-900 to-transparent text-white border-t-4 border-yellow-400 shadow-inner">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 grid grid-cols-1 md:grid-cols-3 gap-8 items-center">

    <!-- Left: Contacts -->
    <div class="flex flex-col text-sm md:text-base text-center md:text-left">
      <p class="font-semibold text-yellow-400 mb-2">Контакти:</p>
      <a href="mailto:info@pub-leprekon.com" class="hover:text-yellow-500 transition">info@pub-leprekon.com</a>
      <a href="tel:+380965776303" class="hover:text-yellow-500 transition">+380 96 577 6303</a>
    </div>

    <!-- Center: Logo -->
    <div class="flex flex-col items-center">
      <div class="rounded-full bg-yellow-400 text-green-900 w-16 h-16 flex items-center justify-center shadow-md border-4 border-white/20">
        <x-lg-logo></x-lg-logo>
      </div>
      <p class="text-xs text-yellow-300 mt-2">&copy; 2025 Leprekon Pub. Усі права захищені.</p>
    </div>

    <!-- Right: Navigation + Socials -->
    <div class="flex flex-col items-center md:items-end gap-3">
      <!-- Pages -->
      <nav class="flex flex-col text-sm md:text-base space-y-1 text-center md:text-right">
        <a href="/" class="hover:text-yellow-500 transition">Головна</a>
        <a href="/menu" class="hover:text-yellow-500 transition">Меню</a>
        <a href="/about" class="hover:text-yellow-500 transition">Про нас</a>
        <a href="/contacts" class="hover:text-yellow-500 transition">Контакти</a>
        <a href="/gallery" class="hover:text-yellow-500 transition">Галерея</a>
      </nav>

      <!-- Socials -->
      <div class="flex gap-4 mt-4">
        <a href="https://www.instagram.com/lepreconpub" class="hover:scale-110 transition transform">
          <svg class="w-7 h-7 fill-yellow-400 hover:fill-yellow-500 transition" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 122.88"><path d="M61.45,0C44.76,0..."/></svg>
        </a>
        <a href="https://www.facebook.com/grillpubleprekon" class="hover:scale-110 transition transform">
          <svg class="w-7 h-7 fill-yellow-400 hover:fill-yellow-500 transition" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M380.001 120.001h99.993..."/></svg>
        </a>
      </div>
    </div>

  </div>
</footer>
