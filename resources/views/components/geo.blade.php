<script>
      async function init() {
        await customElements.whenDefined('gmp-map');

        const map = document.querySelector('gmp-map');
        const marker = document.querySelector('gmp-advanced-marker');
        const placePicker = document.querySelector('gmpx-place-picker');
        const infowindow = new google.maps.InfoWindow();

        map.innerMap.setOptions({
          mapTypeControl: false
        });

        placePicker.addEventListener('gmpx-placechange', () => {
          const place = placePicker.value;

          if (!place.location) {
            window.alert(
              "No details available for input: '" + place.name + "'"
            );
            infowindow.close();
            marker.position = null;
            return;
          }

          if (place.viewport) {
            map.innerMap.fitBounds(place.viewport);
          } else {
            map.center = place.location;
            map.zoom = 17;
          }

          marker.position = place.location;
          infowindow.setContent(
            `<strong>${place.displayName}</strong><br>
             <span>${place.formattedAddress}</span>
          `);
          infowindow.open(map.innerMap, marker);
        });
      }

      document.addEventListener('DOMContentLoaded', init);
    </script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/@googlemaps/extended-component-library/0.6.11/index.min.js">
    </script>
    <style>
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      .place-picker-container {
        padding: 20px;
      }
    </style>

<section class="bg-gray-100">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
        <div class="max-w-2xl lg:max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-extrabold text-gray-900">PUB "Лепрекон" в самому центрі Києва:</h2>
            <p class="mt-4 text-lg text-gray-500">Ми розташовані на одноково доступній відстані від метро : як для синьої, червоної, так і зеленої гілок.</p>
        </div>
        <div class="mt-16 lg:mt-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="rounded-lg overflow-hidden">
                    <gmpx-api-loader key="YOUR_API_KEY_HERE" solution-channel="GMP_GE_mapsandplacesautocomplete_v2">
                    </gmpx-api-loader>
                        <gmp-map center="40.749933,-73.98633" zoom="13" map-id="DEMO_MAP_ID">
                            <div slot="control-block-start-inline-start" class="place-picker-container">
                                <gmpx-place-picker placeholder="Enter an address"></gmpx-place-picker>
                            </div>
                                <gmp-advanced-marker></gmp-advanced-marker>
                        </gmp-map>
                </div>
                <div>
                    <div class="max-w-full mx-auto rounded-lg overflow-hidden">
                        <div class="px-6 py-4">
                            <h3 class="text-lg font-medium text-gray-900">Наша адреса:</h3>
                            <p class="mt-1 text-gray-600">вул. Басейна 19, Київ, Україна 01004</p>
                        </div>
                        <div class="border-t border-gray-200 px-6 py-4">
                            <h3 class="text-lg font-medium text-gray-900">Працюємо:</h3>
                            <p class="mt-1 text-gray-600">Кожень день: з 11:00 - 22:30</p>
                            <p class="mt-1 text-gray-600">Без перерв та вихідних</p>
                            <p class="mt-1 text-gray-600">Звертаємо Вашу увагу на те що значний вибір страв потребує час на приготування, </p>
                            <p class="mt-1 text-gray-600">а тому пропонуємо Вам зробити поперднє замовлення, за телефоном нижче або через форму Зворотнього зв'язку. </p>
                        </div>
                        <div class="border-t border-gray-200 px-6 py-4">
                            <h3 class="text-lg font-medium text-gray-900">Контактна інформація:</h3>
                            <p class="mt-1 text-gray-600">Email: info@pub-leprekon.com</p>
                            <p class="mt-1 text-gray-600">Телефон: +380 96 577 6303</p>
                        </div>
                        <x-reserve></x-reserve>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>