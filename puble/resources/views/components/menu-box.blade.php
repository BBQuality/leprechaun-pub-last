<style>
/* === Menu items === */
.menu-container {
  display: grid;
  gap: 2rem;
  padding: 2rem;
  background: rgba(0,0,0,0.7);
  border-radius: 12px;
}

.menu-items {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
  gap: 1.5rem;
}

.menu-restaurant {
    background: linear-gradient(145deg, #251e00, #3a2e00);
    border: none;
    box-shadow: 0 4px 8px rgba(0,0,0,0.3);
    transition: transform 0.3s, box-shadow 0.3s;
}

.menu-restaurant:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.5);
}

.menu-card {
    background: linear-gradient(135deg, #fbbf24, #f59e0b); /* жовто-помаранчевий */
    color: #fff; /* світлий текст */
    border-radius: 16px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    padding: 1.5rem;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.menu-card h3 {
    color: #fff;
}

.menu-card p {
    color: #fef9c3; /* блідий жовто-білий для відтінку */
}

.menu-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.25);
}

.menu-title {
  font-size: 1.25rem;
  color: var(--clr-accent);
  margin-bottom: .25rem;
}

.menu-subtitle {
  font-size: .95rem;
  color: var(--clr-muted);
}

#menu-filters ul li
{
  display:inline-block;
  color:#fff;
  text-transform:capitalize;
  letter-spacing:1px;
  margin-botttom:40px;
}
#menu-filters ul li a {
    border-radius: 8px;
    transition: background 0.3s ease, color 0.3s ease;
}
#menu-filters ul li a:hover,
#menu-filters ul li a.active {
    background: #FFB03B;
    color: #fff;
}

.menu-info {
  margin-left: 20px;
  width: 50%;
}

.menu-text {
  padding-top: 20px;
}


</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("#menu-filters li a").forEach(link => {
        link.addEventListener("click", function (event) {
            event.preventDefault();

            // Видаляємо клас active у всіх посиланнях
            document.querySelectorAll("#menu-filters li a").forEach(el => el.classList.remove("active"));
            this.classList.add(" active");

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

@props(['groupedMenu'])

<section id="menu-list" class="section-padding">
    <div class="block">
        <div class="row">
            <div class="col-md-12 text-center marb-35">
                <h3 class="title-h">Наше меню</h3>
            </div>

            {{-- Фільтри по типах --}}
            <div class="col-md-12 text-center" id="menu-filters">
                <ul class="flex flex-wrap justify-center gap-4">
                    @foreach($groupedMenu as $type => $categories)
                        <li>
                            <a type="button"
                               class="btn__gld {{ $loop->first ? 'active' : '' }}"
                               data-filter="{{ $type }}">
                                {{ $categories[0]['title_ua'] ?? ucfirst($type) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Вивід категорій --}}
            @foreach($groupedMenu as $type => $categories)
                <div class="menu-container grid sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6
                            bg-white rounded-2xl shadow-md menu-category
                            transition-all duration-300"
                     data-category="{{ $type }}"
                     style="{{ $loop->first ? '' : 'display: none;' }}">
                    <x-menu-list :type="$type" :categories="$categories" />
                </div>
            @endforeach
        </div>
    </div>
</section>
