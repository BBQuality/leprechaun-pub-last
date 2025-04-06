<style>
.title-h {
        font-size: 35px;
        font-family: 'Lobster', cursive;
    font-weight: normal;
    color: #065f46; /* Темно-зелений колір для заголовків */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); /* Легка тінь для акценту */
    }

ul
{
  list-style:none;
}
.title-p {
  color:#9699a6;
  font-size:16px;
}
.section-padding{
    padding: 60px 0px;
}
.marb-35{
  margin-bottom:35px;
}

.menu-restaurant .menu-title
{
  float:left;
  font-family:Montserrat,arial;
  text-transform:uppercase;
  letter-spacing:1px;
  color:#FFB03B;
  }
.menu-restaurant .menu-line
{
  position: absolute;
  bottom:6px;
  border-bottom:1px dotted rgba(0,0,0,.3);
  margin-left: .6em;
  margin-right: .6em;

}
.menu-restaurant .menu-price{
  font-weight:600;
  position:absolute;
  right:0;
  top:0;
  
}
.menu-restaurant .menu-subtitle
{
  display:block;
  float:left;
  color:#B1B1B1;
   font-family: Satisfy,'Open Sans',arial;
    font-size: 1.2rem;
}
.menu-restaurant span.clearfix{
  position:relative;
  display:block;
}
#menu-filters ul li a.active, #menu-filters ul li a:hover
{
  background: #FFB03B;
  color:#fff;
  border:1px solid #FFB03B;
}
#menu-filters ul li 
{
  display:inline-block;
  color:#fff;
  text-transform:capitalize;
  letter-spacing:1px;
  margin-botttom:40px;
}
#menu-filters ul li a
{
  padding:10px 20px;
  font-size:14px;
  color:#565656;
  border-radius:0px;
  border:1px solid #BBBBBB;
  text-decoration:none;
  cursor:pointer;
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
                <div class="col-md-12 text-center  marb-35">
                    <h3 class="title-h">Наше меню</h3>
                </div> 
                
                <div class="col-md-12 text-center" id="menu-filters">
                
    <ul> 
      @foreach($groupedMenu as $type => $categories)
            <li>
                <a type="button" class="filter btn__gld {{ $type === 'eat' ? 'active' : '' }}" data-filter="{{ $type }}">
                    {{ $type === 'eat' ? 'Їжа' : 'Напої' }}
                </a>
            </li>
            @endforeach
    </ul>
    
                </div>
                @foreach($groupedMenu as $type => $categories)
<div class="menu-container grid gap-8 p-6 bg-gray-100 rounded-lg shadow-md">
          <x-menu-list :type="$type" :categories="$categories" />
</div>        
@endforeach
        </div> 
        </div> 
    </section>