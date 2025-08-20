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
.header {
    background-color: #065f46; /* Темно-зелений фон */
    color: #fff;
    border-bottom: 4px solid #ffb03b;
    padding: 1rem 0;
}

.header-container {
        display: flex;
        align-items: center;
        max-width: 1600px;
        margin: 16px auto;
        padding: 0px 1rem;
        flex-direction: row;
        justify-content: space-evenly;
        flex-wrap: wrap;
        align-content: stretch;
}

/* Логотип */
.header-logo {
    display: flex;
    align-items: center;
}

.header-logo span {
    display: inline-block;
    padding: 0.5rem 1rem;
    background-color: #fbbf24; /* Жовтий фон */
    border: 2px dashed #065f46;
    border-radius: 50%;
    color: #065f46;
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

/* Меню */
#menu {
    display: flex;
    gap: 1.5rem;
}

#menu ul {
    display: flex;
    gap: 1.5rem;
}

#menu ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
    font-weight: 500;
    transition: color 0.3s ease;
}

#menu ul li a:hover {
    color: #ffb03b; /* Жовтий при наведенні */
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
            <nav>
                <ul class="flex items-center space-x-6">
                    @foreach ($items as $href => $label)
                        <x-nav-item :$href>{{ $label }}</x-nav-item>
                    @endforeach
                    @foreach ($items_auth as $href => $label)
                        <x-nav-item :$href>{{ $label }}</x-nav-item>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>

    <!-- Hero секція -->
    <div class="header-hero">
        <x-hero></x-hero>
    </div>
</div>