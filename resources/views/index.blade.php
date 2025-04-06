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

<x-layout>
    <x-about></x-about>
    <div class="flex justify-center" style="background-image: url({{ asset('./images/drk_hero.webp') }}); border-top: solid 2px #ffb03b;">
    @if(isset($groupedMenu) && $groupedMenu->isNotEmpty())
    <x-menu-box :groupedMenu="$groupedMenu" />
@else
    <p class="text-center text-gray-500">Меню наразі недоступне.</p>
@endif
    </div>
        <x-line-img></x-line-img>
    <x-geo></x-geo>
</x-layout>

