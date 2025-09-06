@php
$items = [
    route('index') => 'Головна',
    route('contact') => 'Контакти',
];

$items_auth = [
    route('account') => 'Реєстрація',
];
@endphp

<style>
/* Загальні стилі для header */
/* === Header === */

.header-container {
  max-width: 1980px;
  margin: auto;
  padding: 0 1rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.header-logo span {
  background: var(--clr-accent);
  color: var(--clr-primary);
  padding: 1.5rem 1rem;
  border-radius: 50%;
  font-size: 1.5rem;
  font-weight: bold;
}

/* Пошук */
.header-search {
    flex: 1;
    margin: 0 2rem;
    display: flex;
    justify-content: center;
}

.header-search input {
    width: 100%;
    max-width: 400px;
    padding: 0.5rem 1rem;
    border: 2px solid #ffb03b;
    border-radius: 0.5rem;
    font-size: 1rem;
    outline: none;
}

.header-search input:focus {
    border-color: #fbbf24;
}

/* === Меню === */
#menu ul {
  display: flex;
  gap: 1.5rem;
}

#menu ul li a {
  color: var(--clr-light);
  text-decoration: none;
  font-weight: 500;
  transition: color .3s;
}

#menu ul li a:hover {
  color: var(--clr-accent);
}

/* Мобільне меню */
#menu-toggle:checked + #menu {
    display: block;
}

@media (max-width: 768px) {
    .header-container {
        flex-direction: column;
        align-items: flex-start;
    }

    .header-search {
        margin: 1rem 0;
    }

    #menu {
        flex-direction: column;
        gap: 1rem;
        width: 100%;
    }

    #menu ul {
        flex-direction: column;
        gap: 1rem;
    }
}
</style>

<div class="header">

        <header class="w-full bg-transparent text-white">
  <div class="container mx-auto flex items-center justify-between py-4">

    <!-- Left: Contacts -->
    <div class="flex flex-col text-sm">
      <a href="mailto:info@pub-leprekon.com" class="text-yellow-400 hover:text-yellow-500">
        info@pub-leprekon.com
      </a>
      <a href="tel:+380965776303" class="text-yellow-400 hover:text-yellow-500">
        +380 96 577 6303
      </a>
    </div>

    <!-- Center: Navigation + Logo -->
    <nav class="flex items-center gap-6">
      <ul class="flex gap-6 font-medium tracking-wide text-sm uppercase">
        <li><a href="#home" class="hover:text-yellow-400">Home</a></li>
        <li><a href="#about" class="hover:text-yellow-400">About</a></li>
        <li><a href="#menu" class="hover:text-yellow-400">Menu</a></li>
      </ul>

        <div class="header-logo">
            <span class="py-2 px-4 text-4xl font-semibold text-green-700">
                <x-lg-logo></x-lg-logo>
            </span>
        </div>
      <ul class="flex gap-6 font-medium tracking-wide text-sm uppercase">
        <li><a href="#gallery" class="hover:text-yellow-400">Gallery</a></li>
        <li><a href="#events" class="hover:text-yellow-400">Events</a></li>
        <li><a href="#contact" class="hover:text-yellow-400">Contact</a></li>
      </ul>
    </nav>

    <!-- Right: Socials -->
    <div class="flex gap-2" style="justify-content: end;">
 <a href="https://www.instagram.com/lepreconpub" class="hover:text-yellow-500">
                    <svg class="w-8 h-8 fill-green-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 122.88"><title>Instagram</title><path d="M61.45,0C44.76,0,42.66.07,36.11.37A45.08,45.08,0,0,0,21.2,3.23a29.86,29.86,0,0,0-10.88,7.08,30.26,30.26,0,0,0-7.1,10.88A44.92,44.92,0,0,0,.37,36.11C.08,42.66,0,44.75,0,61.44S.07,80.21.37,86.77a45.08,45.08,0,0,0,2.86,14.91,30.12,30.12,0,0,0,7.08,10.88,30.13,30.13,0,0,0,10.88,7.1,45.17,45.17,0,0,0,14.92,2.85c6.55.3,8.64.37,25.33.37s18.77-.07,25.33-.37a45.17,45.17,0,0,0,14.92-2.85,31.54,31.54,0,0,0,18-18,45.6,45.6,0,0,0,2.86-14.91c.29-6.55.37-8.64.37-25.33s-.08-18.78-.37-25.33a45.66,45.66,0,0,0-2.86-14.92,30.1,30.1,0,0,0-7.09-10.88,29.77,29.77,0,0,0-10.88-7.08A45.14,45.14,0,0,0,86.76.37C80.2.07,78.12,0,61.43,0ZM55.93,11.07h5.52c16.4,0,18.34.06,24.82.36a34,34,0,0,1,11.41,2.11,19,19,0,0,1,7.06,4.6,19.16,19.16,0,0,1,4.6,7.06,34,34,0,0,1,2.11,11.41c.3,6.47.36,8.42.36,24.82s-.06,18.34-.36,24.82a33.89,33.89,0,0,1-2.11,11.4A20.35,20.35,0,0,1,97.68,109.3a33.64,33.64,0,0,1-11.41,2.12c-6.47.3-8.42.36-24.82.36s-18.35-.06-24.83-.36a34,34,0,0,1-11.41-2.12,19,19,0,0,1-7.07-4.59,19,19,0,0,1-4.59-7.06,34,34,0,0,1-2.12-11.41c-.29-6.48-.35-8.42-.35-24.83s.06-18.34.35-24.82a33.7,33.7,0,0,1,2.12-11.41,19,19,0,0,1,4.59-7.06,19.12,19.12,0,0,1,7.07-4.6A34.22,34.22,0,0,1,36.62,11.4c5.67-.25,7.86-.33,19.31-.34Zm38.31,10.2a7.38,7.38,0,1,0,7.38,7.37,7.37,7.37,0,0,0-7.38-7.37ZM61.45,29.89A31.55,31.55,0,1,0,93,61.44,31.56,31.56,0,0,0,61.45,29.89Zm0,11.07A20.48,20.48,0,1,1,41,61.44,20.48,20.48,0,0,1,61.45,41Z"/></svg>
                </a>
                <a href="https://www.facebook.com/grillpubleprekon" class="hover:text-yellow-500">
                    <svg class="w-8 h-8 fill-green-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><title>Facebook</title><path d="M380.001 120.001h99.993V0h-99.993c-77.186 0-139.986 62.8-139.986 139.986v60h-80.009V320h79.985v320h120.013V320h99.994l19.996-120.013h-119.99v-60.001c0-10.843 9.154-19.996 19.996-19.996v.012z"/></svg>
                </a>
    </div>

  </div>
</header>


</div>
