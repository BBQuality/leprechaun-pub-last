<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("#menu-filters li a").forEach(link => {
        link.addEventListener("click", function (event) {
            event.preventDefault();

            // Видаляємо клас active у всіх посиланнях
            document.querySelectorAll("#menu-filters li a").forEach(el => el.classList.remove("active"));
            this.classList.add("active");

            // Отримуємо вибраний фільтр
            let selectedFilter = this.getAttribute("data-filter");

            // Ховаємо всі категорії
            document.querySelectorAll(".menu-category").forEach(category => {
                category.style.display = "none";
            });

            // Показуємо лише вибрану категорію
            document.querySelectorAll(`.menu-category[data-category="${selectedFilter}"]`).forEach(category => {
                category.style.display = "block";
            });
        });
    });

    // Показати першу категорію при завантаженні сторінки
    let firstFilter = document.querySelector("#menu-filters li a.active");
    if (firstFilter) {
        let defaultFilter = firstFilter.getAttribute("data-filter");
        document.querySelectorAll(`.menu-category[data-category="${defaultFilter}"]`).forEach(category => {
            category.style.display = "block";
        });
    }
});
</script>

{{-- Передаємо slides у компонент layout --}}
<x-layout :slides="$slides">
    <x-line-img></x-line-img>
    <!-- <div class="absolute flex justify-end marb-35 mb-2 mx-auto">
        <h2 class="relative inline-flex menu-title" style="bottom: 29px; right: calc(100% - 37%);">Меню</h2>
    </div> -->
    <x-title-menu></x-title-menu>
    <div class="menu-container">
        @if(isset($groupedMenu) && $groupedMenu->isNotEmpty())
            <x-menu-box :groupedMenu="$groupedMenu" />
        @else
            <p class="text-center text-gray-500">Меню наразі недоступне.</p>
        @endif
    </div>
    <x-about></x-about>

</x-layout>

