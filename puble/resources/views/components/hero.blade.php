<style>

/* === Hero === */
.hero {
  position: relative;
  background-size: cover;
  background-position: center;
  padding: 6rem 1rem;
  text-align: center;
}

.hero-overlay {
  position: absolute;
  inset: 0;
   background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.3));
}

.hero-content {
    position: relative;
    z-index: 2;
}

.hero h1 {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 1rem;
    text-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
}

.hero p {
    font-size: 1.25rem;
    margin-bottom: 1.5rem;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.btn__gld {
  position: relative;
  display: inline-block;
  padding: .75rem 1.5rem;
  font-size: 1rem;
  font-weight: bold;
  color: var(--clr-light);
  border: 2px solid var(--clr-accent);
  border-radius: 30px;
  background: transparent;
  text-transform: uppercase;
  transition: all .3s ease;
  cursor: pointer;
}

.btn__gld:hover,
.btn__gld:focus {
  background: var(--clr-accent);
  color: var(--clr-dark);
  box-shadow: 0 0 12px rgba(255,176,59,0.7);
}

/* === Кнопки === */


.serve {

        position: absolute;
        right: 0px;
        z-index: 4;
}

.main {
  display: none;
  flex-direction: column;
  gap: 1em;
}

.up {
  display: flex;
  flex-direction: row;
  gap: 1em;
}

.down {
  display: flex;
  flex-direction: row;
  gap: 1em;
}

.card1 {
  width: 196px;
  height: 196px;
  outline: none;
  border: none;
  background: #87751cd9;
  border-radius: 190px 5px 5px 5px;
  box-shadow: rgb(171 143 36 / 25%) 0px 2px 5px -1px, rgb(153 114 39 / 30%) 7px 5px 3px;
  transition: .2s ease-in-out;
}

.icon1 {
  margin-top: 1.5em;
  margin-left: 1.2em;
  fill: #cc39a4;
}

.card2 {
  width: 196px;
  height: 196px;
  outline: none;
  border: none;
  background: #87751cd9;
  border-radius: 5px 190px 5px 5px;
  box-shadow: rgb(171 143 36 / 25%) 0px 2px 5px -1px, rgb(153 114 39 / 30%) 7px 5px 3px;
  transition: .2s ease-in-out;
}

.icon2 {
  margin-top: 1.5em;
  margin-left: -.9em;
  fill: #03A9F4;
}

.card3 {
  width: 196px;
  height: 196px;
  outline: none;
  border: none;
  background: #87751cd9;
  border-radius: 5px 5px 5px 190px;
  box-shadow: rgb(171 143 36 / 25%) 0px 2px 5px -1px, rgb(153 114 39 / 30%) 7px 5px 3px;
  transition: .2s ease-in-out;
}

.icon3 {
  margin-top: -.6em;
  margin-left: 1.2em;
}

.card4 {
  width: 196px;
  height: 196px;
  outline: none;
  border: none;
  background: #87751cd9;
  border-radius: 5px 5px 190px 5px;
  box-shadow: rgb(171 143 36 / 25%) 0px 2px 5px -1px, rgb(153 114 39 / 30%) 7px 5px 3px;
  transition: .2s ease-in-out;
}

.icon4 {
  margin-top: -.9em;
  margin-left: -1.2em;
  fill: #8c9eff;
}

.card1:hover {
  cursor: pointer;
  scale: 1.1;
  background-color: #e3c428d9;
}

.card1:hover .icon1 {
  fill: white;
}

.card2:hover {
  cursor: pointer;
  scale: 1.1;
  background-color: #e3c428d9;
}

.card2:hover .icon2 {
  fill: white;
}

.card3:hover {
  cursor: pointer;
  scale: 1.1;
  background-color: #e3c428d9;
}

.card3:hover .icon3 {
  fill: white;
}

.card4:hover {
  cursor: pointer;
  scale: 1.1;
  background-color: #e3c428d9;
}

.card4:hover .icon4 {
  fill: white;
}

</style>
<section class="hero bg-cover bg-center" style="background-image: url('{{ asset('./images/hero__head__img.webp') }}');">
    <div class="hero-overlay"></div>
    <div class="hero-content container mx-auto text-center px-4">
        <h1 class="text-4xl md:text-6xl font-bold mb-6">Ласкаво просимо до PUB "ЛЕПРЕКОН"</h1>
        <p class="text-lg md:text-xl mb-6">Найкращі страви та напої для вашого настрою</p>
        <a href="#menu" class="btn__gld">Переглянути меню</a>
    </div>
</section>
<section class="serve flex items-center justify-start p-6 m-0 mx-auto">
        <div class="block">
            <div class="">
                <div class="box p-2">
            <div class="main">
                <div class="up">
                    <button class="card1">

                    </button>
                    <button class="card2">

                    </button>
                </div>
                <div class="down">
                    <button class="card3">

                    </button>
                    <button class="card4">

                    </button>
                </div>
            </div>
        </div>
            </div>
        </div>
</section>
