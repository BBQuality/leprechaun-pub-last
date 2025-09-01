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
  max-width: 1200px;
  margin: auto;
  padding: 0 1rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.header-logo span {
  background: var(--clr-accent);
  color: var(--clr-primary);
  padding: .5rem 1rem;
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
    <div class="header-container">
        <!-- Логотип -->
        <div class="header-logo">
            <span class="py-2 px-4 bg-yellow-600 border-2 border-dashed border-green-900 rounded-full text-4xl font-serif font-semibold text-green-700">
                <x-lg-logo></x-lg-logo>
            </span>
        </div>

        <!-- Пошук -->
        <div class="header-search">
            <input type="text" placeholder="Пошук по сайту..." />
        </div>

        <!-- Меню -->
        <div id="menu">
            <div>
                <ul class="btn__gld flex items-center space-x-6">
                    @foreach ($items as $href => $label)
                        <x-nav-item :$href>{{ $label }}</x-nav-item>
                    @endforeach
                    @foreach ($items_auth as $href => $label)
                        <x-nav-item :$href>{{ $label }}</x-nav-item>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Hero секція -->
    <div class="header-hero">
        <x-hero></x-hero>
    </div>
</div>
