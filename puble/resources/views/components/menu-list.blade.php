@props(['type', 'categories'])

<div class="menu-section px-8 {{ $type }}" data-type="{{ $type }}">
    @foreach($categories as $category)
        <div class="menu-category inline-flex mb-12 {{ $category->slug }}" data-category="{{ $type }}">
            <h2 class="text-3xl text-center font-semibold italic text-green-800 capitalize mb-6">
                {{ $category['title_ua'] }} ({{ $category['title_en'] }})
            </h2>

            {{-- Контейнер із картками --}}
            <div class="menu-items">
                @foreach($category['items'] as $item)
                    @php
                        $visibleVariants = collect($item['variants'])->filter(fn($v) => !$v['spec_offer']);
                    @endphp

                    @if($visibleVariants->isNotEmpty())
                        <div class="card">
                            {{-- Назва + опис --}}
                            <div class="mb-4">
                                <h4 class="title">
                                    {{ $item['title_ua'] }} ({{ $item['title_en'] }})
                                </h4>
                                @if(!empty($item['description_ua']))
                                    <p class="desc">
                                        {{ $item['description_ua'] }}
                                    </p>
                                @endif
                            </div>

                            {{-- Варіанти + ціни --}}
                            <div class="variants">
                                @foreach($visibleVariants as $variant)
                                    <div class="variant-row">
                                        <span class="volume">
                                            {{ $variant['output'] ? $variant['output'] . ' ' . $variant['volume'] : '' }}
                                        </span>
                                        <span class="price">
                                            {{ $variant['price'] }} {{ $variant['currency'] }}
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
</div>


<style>
/* Контейнер карток */
.menu-items {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  justify-content: center;
}

/* Картка */
.card {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding: 16px;
  width: 220px;
  min-height: 200px;
  background-color: #17141d;
  border-radius: 12px;
  box-shadow: -1rem 0 3rem #000;
  transition: 0.4s ease-out;
  position: relative;
  left: 0;
  color: white;
  cursor: pointer;
}

.card:not(:first-child) {
  margin-left: -40px;
}

.card:hover {
  transform: translate(-10px, -20px) rotate(-1deg);
  transition: 0.4s ease-out;
}

.card:hover ~ .card {
  position: relative;
  left: 40px;
  transition: 0.4s ease-out;
}

/* Назва */
.title {
  color: #fff;
  font-weight: 600;
  font-size: 1rem;
  margin-bottom: 4px;
}

.desc {
  font-size: 0.85rem;
  color: #bbb;
  line-height: 1.3;
}

/* Варіанти */
.variants {
  margin-top: auto;
  display: flex;
  flex-direction: column;
  gap: 6px;
}

.variant-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.volume {
  font-size: 0.85rem;
  color: #aaa;
}

.price {
  font-size: 0.95rem;
  font-weight: bold;
  color: #f1c40f;
}

/* 📱 Адаптивність */

/* мобілка: 1 колонка */
@media (max-width: 640px) {
  .menu-items {
    flex-direction: column;
    align-items: center;
    gap: 20px;
  }

  .card {
    width: 100%;
    max-width: 320px;
    margin-left: 0 !important;
  }
}

/* планшет: 2 колонки */
@media (min-width: 641px) and (max-width: 1024px) {
  .menu-items {
    justify-content: center;
    gap: 25px;
  }

  .card {
    width: calc(50% - 30px);
    margin-left: 0 !important;
  }
}

/* десктоп: ефект перекривання */
@media (min-width: 1025px) {
  .menu-items {
    justify-content: flex-around;
  }
}
</style>
