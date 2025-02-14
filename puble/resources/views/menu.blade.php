<style>
.btn__gld {
  font-size: 17px;
  background: transparent;
  border: none;
  padding: 1em 1.5em;
  color: #ffedd3;
  text-transform: uppercase;
  position: relative;
  transition: 0.5s ease;
  cursor: pointer;
}

.btn__gld::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 2px;
  width: 0;
  background-color: #ffc506;
  transition: 0.5s ease;
}

.btn__gld:hover {
  color: transparent;
  transition-delay: 0.5s;
}

.btn__gld:hover::before {
  width: 100%;
}

.btn__gld::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 0;
  width: 100%;
  background-color: #ffc506;
  transition: 0.4s ease;
  z-index: 1;
}

.btn__gld:hover::after {
  height: 100%;
  transition-delay: 0.4s;
  color: aliceblue;
  position: absolute;
  z-index: -1;
}

.title-h {
        font-size: 35px;
   color: #FFB03B;
    font-size: 46px;
    font-family: 'Satisfy', sans-serif;
    font-weight: 300;
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
.menu-restaurant
{
  width:50%;
  float:left;
  padding:15px;
  position:realtive;
  
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
@media (min-width: 20px) and (max-width: 450px) 
{
  .menu-restaurant 
  {
    width: 100%;
  }
  .header-h
  {
    font-size: 35px;
  }
  .header-p 
  {
    font-size: 14px;
  }
  
}
</style>
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
<x-layout >
    <section id="menu-list" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center  marb-35">
                    <h1 class="title-h">Наше меню</h1>
                </div>
                <div class="col-md-12 text-center" id="menu-filters">
    <ul> 
        @foreach($groupedMenu as $type => $categories)
            <li>
                <a type="button" class="filter btn__gld{{ $type === 'eat' ? 'active' : '' }}" data-filter="{{ $type }}">
                    {{ $type === 'eat' ? 'Їжа' : 'Напої' }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
            <x-menu-list :groupedMenu="$groupedMenu" />
            </div>
        </div> 
    </section>
</x-layout>