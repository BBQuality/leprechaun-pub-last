@php
    $slideCount = is_countable($slides) ? count($slides) : 0;
@endphp

@if($slideCount > 0)
<section class="hero bg-black/70 text-green-900 relative">
    <div id="hero-slider" class="relative w-full overflow-hidden h-[520px] flex items-center justify-center">

        @foreach($slides as $index => $slide)
            <div class="slide {{ $index === 0 ? 'flex' : 'hidden' }} relative w-full h-full items-center justify-center px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-1 w-full max-w-2xl items-center justify-evenly">
                    <!-- Лівий блок (текст) -->
                    <div class="text-left space-y-4 z-10">
                        {{-- Назва --}}
                        <h2 class="text-3xl font-bold text-green-600">{{ $slide['title'] }}</h2>

                        {{-- Слоган --}}
                        @if(!empty($slide['slogan']))
                            <p class="text-lg font-semibold text-green-500">{{ $slide['slogan'] }}</p>
                        @endif

                        {{-- Опис --}}
                        @if(!empty($slide['description']))
                            <p class="text-sm text-gray-300">{{ $slide['description'] }}</p>
                        @endif

                        {{-- Ціна --}}
                        @if(isset($slide['price']))
                            <p class="text-xl font-bold text-red-600">Ціна: {{ $slide['price'] }} грн</p>
                        @endif
                    </div>

                    <!-- Правий блок (зображення) -->
                    <div class="flex justify-center">
                        <img src="{{ $slide['image'] }}" alt="{{ $slide['title'] }}"
                             class="max-h-[380px] object-contain rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        @endforeach

{{-- Навігація (вертикальні кнопки зліва) --}}
<div class="absolute left-6 top-1/2 -translate-y-1/2 flex flex-col gap-3 z-20 w-auto">
    <button id="hero-prev"
        class="block w-12 h-12 rounded-full bg-black/70 text-white shadow-lg hover:bg-green-600 transition duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-auto my-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    <button id="hero-next"
        class="block w-12 h-12 rounded-full bg-black/70 text-white shadow-lg hover:bg-green-600 transition duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-auto my-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>
</div>

    </div>


</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll("#hero-slider .slide");
    if (!slides || slides.length === 0) return;

    let current = 0;
    function showSlide(i) {
        slides.forEach((s, idx) => {
            s.classList.toggle('hidden', idx !== i);
            s.classList.toggle('flex', idx === i);
        });
    }

    document.getElementById('hero-prev').addEventListener('click', () => {
        current = (current - 1 + slides.length) % slides.length;
        showSlide(current);
    });

    document.getElementById('hero-next').addEventListener('click', () => {
        current = (current + 1) % slides.length;
        showSlide(current);
    });

    // Автопрокрутка раз на 30 секунд
    if (slides.length > 1) {
        setInterval(() => {
            current = (current + 1) % slides.length;
            showSlide(current);
        }, 30000);
    }
});
</script>
@endif
