<article class="kontext">
  <!-- Layer 1: About -->
  <div class="layer one show">
    <div class="max-w-8xl mx-auto py-12 px-6 md:px-12 lg:py-24 bg-cover bg-center"
         style="background-image: url({{ asset('./images/drk_hero.webp') }});">
        <div class="flex flex-col lg:flex-row items-center lg:items-start">
            <!-- Ліва частина -->
            <div class="w-full lg:w-1/3 p-8 text-center lg:text-left">
                <h1 class="text-4xl md:text-5xl text-green-700 font-bold leading-tight">
                    АТМОСФЕРА ТА ЗАТИШОК
                </h1>
                <ul class="mt-6 space-y-4">
                    <li class="text-xl md:text-2xl text-yellow-600 font-semibold">СМАЧНА ЇЖА</li>
                    <li class="text-2xl md:text-3xl text-green-600 font-semibold">СПОРТИВНІ ТРАНСЛЯЦІЇ</li>
                    <li class="text-xl md:text-2xl text-yellow-600 font-semibold">ВИБІР НАПОЇВ</li>
                </ul>
                <h2 class="text-6xl md:text-6xl text-green-900 mt-8 font-bold">PUB "Лепрекон"</h2>
                <p class="text-lg md:text-xl text-yellow-600 font-light mt-4 leading-relaxed">
                    Наш паб — це місце, де ви можете насолодитися справжньою британською атмосферою.
                </p>
                <p class="text-lg md:text-xl text-yellow-600 font-light mt-2 leading-relaxed">
                    Ми пропонуємо широкий вибір традиційних страв та напоїв, приготованих за старовинними рецептами.
                </p>
                  <b class="text-lg md:text-xl text-yellow-600 font-light mt-2 leading-relaxed">Наша адреса:</b>
                <p class="text-lg md:text-xl text-yellow-600 font-light mt-2 leading-relaxed">Київ, Україна, 01004вул. Басейна 19</p>
                <div class="mt-6 flex justify-center lg:justify-start gap-x-6">
                    <a href="https://www.instagram.com/lepreconpub" aria-label="Instagram" target="_blank" rel="noopener">
                        <!-- встав свій SVG або іконку -->
                        <svg class="w-8 h-8 fill-green-900 hover:fill-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 122.88"><path d="M61.45,0C44.76,0,42.66.07,36.11.37..."/></svg>
                    </a>
                    <a href="https://www.facebook.com/grillpubleprekon" aria-label="Facebook" target="_blank" rel="noopener">
                        <svg class="w-8 h-8 fill-green-900 hover:fill-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M380.001 120.001h99.993V0h-99.993..."/></svg>
                    </a>
                </div>
            </div>

            <!-- Права частина -->
            <div class="w-full lg:w-2/3 py-8 px-10 grid grid-cols-2 md:grid-cols-4 gap-4">
                <img class="rounded-lg shadow-lg" src="{{ asset('./images/fotoroom__beer.webp') }}" alt="beer room">
                <img class="rounded-lg shadow-lg" src="{{ asset('./images/holl.png') }}" alt="first room">
                <img class="rounded-lg shadow-lg" src="{{ asset('./images/bar__bottles.webp') }}" alt="bar">
                <img class="rounded-lg shadow-lg" src="{{ asset('./images/about.webp') }}" alt="guinness">
                <img class="rounded-lg shadow-lg col-span-2 md:col-span-4" src="{{ asset('./images/bar.png') }}" alt="all bar">
            </div>
        </div>
    </div>
  </div>

  <!-- Layer 2: Menu -->
  <div class="layer two">
    <section id="menu-list" class="min-h-screen bg-yellow-100 text-green-900 flex items-center justify-center">
      <div class="max-w-6xl mx-auto px-6 py-12">
        <h2 class="text-4xl font-bold text-center mb-10">Меню</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">
            <h3 class="text-xl font-semibold mb-3">Бургер Лепрекон</h3>
            <p class="text-sm text-gray-700">Соковите м'ясо, домашня булочка, свіжі овочі.</p>
          </div>
          <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">
            <h3 class="text-xl font-semibold mb-3">Фірмове пиво</h3>
            <p class="text-sm text-gray-700">Найкращі сорти від місцевих броварень.</p>
          </div>
          <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">
            <h3 class="text-xl font-semibold mb-3">Стейк на грилі</h3>
            <p class="text-sm text-gray-700">Соковитий стейк з мармурової яловичини.</p>
          </div>

        </div>
        <div class="flex flex-wrap justify-center items-center rounded-xl shadow-lg p-6 hover:shadow-xl transition">
            <b class="text-sm text-gray-700">Звертаємо Вашу увагу на те що значний вибір страв потребує час на приготування,</b>
            <p class="text-sm text-gray-700">а тому пропонуємо Вам зробити поперднє замовлення, за телефоном нижче або через форму Зворотнього зв'язку.</p>
          </div>
      </div>

  </div>

  <!-- Layer 3: Contacts -->
  <div class="layer three">
    <section id="contact" class="about-section py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Про нас</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
            <!-- Ліва частина: текст або карта -->
            <div>
                <p class="mb-4">
                    Наш паб «Лепрекон» — це місце для друзів, гарного настрою та смачної кухні.
                    Ми раді бачити кожного відвідувача!
                </p>
                <b>Наша адреса:</b>
                <p>Київ, Україна, 01004вул. Басейна 19</p>

                <div class="aspect-w-16 aspect-h-9">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40693.78578214619!2d30.492309295476444!3d50.45003363264211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce5da1f3edcb%3A0x78f37a12b60f1f79!2sKyiv!5e0!3m2!1sen!2sua!4v1692211292915!5m2!1sen!2sua"
                        width="100%"
                        height="300"
                        style="border:0;"
                        allowfullscreen
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- Права частина: форма -->
<div class="box">
<form class="form" action="{{ route('contact.submit') }}" method="POST">
  @csrf
    <div class="flex">
        <label for="first_name">
            <input class="input" type="text" type="text" id="first_name" name="first_name" placeholder="Ваше ім'я" required>
            <span>Ваше ім'я</span>
        </label>

        <label for="last_name">
            <input class="input" type="text" type="text" id="last_name" name="last_name" placeholder="Ваше прізвище" required>
            <span>Ваше прізвище</span>
        </label>
    </div>

    <label for="email">
        <input class="input" type="email" id="email" name="email" placeholder="email" required>
        <span>email</span>
    </label>

    <label for="phone">
        <input class="input" type="tel" id="phone" name="phone" placeholder="Номер телефону" required>
        <span>Контактний номер</span>
    </label>
    <label for="message">
        <textarea class="input01" rows="3" id="message" name="message" placeholder="Ваше повідомлення тут..." required></textarea>
        <span>Повідомлення</span>
    </label>

    <button class="fancy" type="submit">
      <span class="top-key"></span>
      <span class="text">Надіслати</span>
      <span class="bottom-key-1"></span>
      <span class="bottom-key-2"></span>
    </button>
</form>

@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <ul style="color: red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

</div>

        </div>
    </div>
</section>

  </div>

  <!-- Bullets (пустий, JS заповнить) -->
  <ul class="bullets" aria-hidden="false"></ul>
</article>

<!-- ===== CSS (kontext + базові стилі для bullets) ===== -->
<style>
    .form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 350px;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  position: relative;
}

.message {
  color: rgba(88, 87, 87, 0.822);
  font-size: 14px;
}

.flex {
  display: flex;
  width: 100%;
  gap: 6px;
}

.form label {
  position: relative;
}

.form label .input {
  width: 100%;
  padding: 10px 10px 20px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 5px;
}

.form label .input + span {
  position: absolute;
  left: 10px;
  top: 15px;
  color: grey;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input:placeholder-shown + span {
  top: 15px;
  font-size: 0.9em;
}

.form label .input:focus + span,.form label .input:valid + span {
  top: 30px;
  font-size: 0.7em;
  font-weight: 600;
}

.form label .input:valid + span {
  color: green;
}

.input01 {
  width: 100%;
  padding: 10px 10px 20px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 5px;
}

.form label .input01 + span {
  position: absolute;
  left: 10px;
  top: 50px;
  color: grey;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input01:placeholder-shown + span {
  top: 40px;
  font-size: 0.9em;
}

.form label .input01:focus + span,.form label .input01:valid + span {
  top: 50px;
  font-size: 0.7em;
  font-weight: 600;
}

.form label .input01:valid + span {
  color: green;
}

.fancy {
  background-color: transparent;
  border: 2px solid #cacaca;
  border-radius: 0px;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-weight: 390;
  letter-spacing: 2px;
  margin: 0;
  outline: none;
  overflow: visible;
  padding: 8px 30px;
  position: relative;
  text-align: center;
  text-decoration: none;
  text-transform: none;
  transition: all 0.3s ease-in-out;
  user-select: none;
  font-size: 13px;
}

.fancy::before {
  content: " ";
  width: 1.7rem;
  height: 2px;
  background: #cacaca;
  top: 50%;
  left: 1.5em;
  position: absolute;
  transform: translateY(-50%);
  transform: translateX(230%);
  transform-origin: center;
  transition: background 0.3s linear, width 0.3s linear;
}

.fancy .text {
  font-size: 1.125em;
  line-height: 1.33333em;
  padding-left: 2em;
  display: block;
  text-align: left;
  transition: all 0.3s ease-in-out;
  text-transform: lowercase;
  text-decoration: none;
  color: #818181;
  transform: translateX(30%);
}

.fancy .top-key {
  height: 2px;
  width: 1.5625rem;
  top: -2px;
  left: 0.625rem;
  position: absolute;
  background: white;
  transition: width 0.5s ease-out, left 0.3s ease-out;
}

.fancy .bottom-key-1 {
  height: 2px;
  width: 1.5625rem;
  right: 1.875rem;
  bottom: -2px;
  position: absolute;
  background: white;
  transition: width 0.5s ease-out, right 0.3s ease-out;
}

.fancy .bottom-key-2 {
  height: 2px;
  width: 0.625rem;
  right: 0.625rem;
  bottom: -2px;
  position: absolute;
  background: white;
  transition: width 0.5s ease-out, right 0.3s ease-out;
}

.fancy:hover {
  color: white;
  background: #cacaca;
}

.fancy:hover::before {
  width: 1.5rem;
  background: white;
}

.fancy:hover .text {
  color: white;
  padding-left: 1.5em;
}

.fancy:hover .top-key {
  left: -2px;
  width: 0px;
}

.fancy:hover .bottom-key-1,
 .fancy:hover .bottom-key-2 {
  right: 0;
  width: 0;
}
/* базова розкладка */
.kontext {
  width: 100%;
  height: 100vh;
  position: relative;
  overflow: hidden;
}

/* шари */
.kontext .layer {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  visibility: hidden;
}

.kontext .layer.show {
  visibility: visible;
}

/* perspective + 3D transform */
.kontext.capable {
  perspective: 1000px;
  transform-style: preserve-3d;
}

.kontext.capable .layer {
  transform: translateZ(-100px);
}

.kontext.capable .layer.show {
  transform: translateZ(0);
}

/* анімації праворуч/ліворуч (залишені ті самі ключфрейми) */
.kontext.capable.animate .layer.show.right { animation: show-right 1s forwards ease; }
.kontext.capable.animate .layer.hide.right { animation: hide-right 1s forwards ease; }
.kontext.capable.animate .layer.show.left  { animation: show-left  1s forwards ease; }
.kontext.capable.animate .layer.hide.left  { animation: hide-left  1s forwards ease; }

/* keyframes (скорочено, але робочі) */
@keyframes show-right {
  0%   { transform: translateZ(-200px); }
  40%  { transform: translate(40%,0) scale(0.8) rotateY(-20deg); }
  100% { transform: translateZ(0); }
}
@keyframes hide-right {
  0%   { transform: translateZ(0); visibility: visible; }
  40%  { transform: translate(-40%,0) scale(0.8) rotateY(20deg); }
  100% { transform: translateZ(-200px); visibility: hidden; }
}
@keyframes show-left {
  0%   { transform: translateZ(-200px); }
  40%  { transform: translate(-40%,0) scale(0.8) rotateY(20deg); }
  100% { transform: translateZ(0); }
}
@keyframes hide-left {
  0%   { transform: translateZ(0); visibility: visible; }
  40%  { transform: translate(40%,0) scale(0.8) rotateY(-20deg); }
  100% { transform: translateZ(-200px); visibility: hidden; }
}

/* Dimmer (опціонально залишаємо) */
.kontext .layer .dimmer {
  position: absolute;
  width:100%; height:100%; top:0; left:0; visibility: hidden; background: transparent;
}
.kontext.capable.animate .layer.hide .dimmer { visibility: visible; background: rgba(0,0,0,0.7); transition: background 1s ease; }

/* bullets */
.bullets {
  position: absolute;
  width: 100%;
  bottom: 20px;
  padding: 0;
  margin: 0;
  text-align: center;
  z-index: 60;
  pointer-events: auto;
}
.bullets li {
  display: inline-block;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  margin: 0 6px;
  background: rgba(255,255,255,0.45);
  box-shadow: 0 1px 2px rgba(0,0,0,0.25);
  cursor: pointer;
}
.bullets li.active {
  background: #fff;
}

/* мобіл адапт (тільки текст) */
@media (max-width: 768px) {
  .kontext { height: auto; }
  .kontext .layer { position: relative; height: auto; visibility: visible; transform: none; }
  .bullets { position: relative; bottom: auto; padding-top: 16px; }
}
</style>

<!-- ===== JS (конструктор kontext + ініціалізація) ===== -->
<script>
/* ---- kontext core (застосований як у тебе) ---- */
window.kontext = function( container ) {
	// Signal
	var changed = new kontext.Signal();
	var layers = Array.prototype.slice.call( container.querySelectorAll( '.layer' ) );
	var capable = 'WebkitPerspective' in document.body.style ||
	              'MozPerspective' in document.body.style ||
	              'msPerspective' in document.body.style ||
	              'OPerspective' in document.body.style ||
	              'perspective' in document.body.style;
	if( capable ) container.classList.add( 'capable' );

	// add dimmer
	layers.forEach( function( el ) {
		if( !el.querySelector( '.dimmer' ) ) el.innerHTML += '<div class="dimmer"></div>';
	} );

	function show( target, direction ) {
		layers = Array.prototype.slice.call( container.querySelectorAll( '.layer' ) );
		container.classList.add( 'animate' );
		direction = direction || ( target > getIndex() ? 'right' : 'left' );
		if( typeof target === 'string' ) target = parseInt( target );
		if( typeof target !== 'number' ) target = getIndex( target );
		target = Math.max( Math.min( target, layers.length ), 0 );

		if( layers[ target ] && !layers[ target ].classList.contains( 'show' ) ) {
			layers.forEach( function( el ) {
				el.classList.remove( 'left', 'right' );
				el.classList.add( direction );
				if( el.classList.contains( 'show' ) ) {
					el.classList.remove( 'show' );
					el.classList.add( 'hide' );
				} else {
					el.classList.remove( 'hide' );
				}
			} );
			layers[ target ].classList.add( 'show' );
			changed.dispatch( layers[target], target );
		}
	}

	function prev() {
		var index = getIndex() - 1;
		show( index >= 0 ? index : layers.length + index, 'left' );
	}
	function next() {
		show( ( getIndex() + 1 ) % layers.length, 'right' );
	}
	function getIndex( of ) {
		var index = 0;
		layers.forEach( function( layer, i ) {
			if( ( of && of == layer ) || ( !of && layer.classList.contains( 'show' ) ) ) {
				index = i;
				return;
			}
		} );
		return index;
	}
	function getTotal() { return layers.length; }

	return { show: show, prev: prev, next: next, getIndex: getIndex, getTotal: getTotal, changed: changed };
};

kontext.Signal = function() { this.listeners = []; }
kontext.Signal.prototype.add = function( callback ) { this.listeners.push( callback ); }
kontext.Signal.prototype.remove = function( callback ) { var i = this.listeners.indexOf( callback ); if( i >= 0 ) this.listeners.splice( i, 1 ); }
kontext.Signal.prototype.dispatch = function() { var args = Array.prototype.slice.call( arguments ); this.listeners.forEach( function( f ) { f.apply( null, args ); } ); }

/* ---- Ініціалізація: дочекаємось DOM, ініціалізуємо тільки 1 раз і працюємо з локальним контейнером ---- */
document.addEventListener('DOMContentLoaded', function() {
  var container = document.querySelector('.kontext');
  if (!container) return;

  var k = kontext(container);

  // bullets — беремо UL **всередині контейнера**, очищаємо і генеруємо
  var bulletsContainer = container.querySelector('.bullets');
  if (!bulletsContainer) {
    bulletsContainer = document.createElement('ul');
    bulletsContainer.className = 'bullets';
    container.appendChild(bulletsContainer);
  }
  bulletsContainer.innerHTML = '';

  for (var i = 0, len = k.getTotal(); i < len; i++) {
    (function(idx){
      var bullet = document.createElement('li');
      if (idx === k.getIndex()) bullet.className = 'active';
      bullet.setAttribute('data-index', idx);
      bullet.addEventListener('click', function(e){ k.show(idx); });
      bullet.addEventListener('touchstart', function(e){ k.show(idx); }, {passive:true});
      bulletsContainer.appendChild(bullet);
    })(i);
  }

  // Update bullets when layer changes
  k.changed.add(function(layer, index){
    var bullets = container.querySelectorAll('.bullets li');
    for (var i = 0; i < bullets.length; i++) {
      bullets[i].className = i === index ? 'active' : '';
    }
  });

  // Keyboard navigation
  document.addEventListener('keyup', function(event){
    if (event.key === 'ArrowLeft') k.prev();
    if (event.key === 'ArrowRight') k.next();
  });

  // optional: expose k for console (debug)
  window._kontextInstance = k;
});
</script>
