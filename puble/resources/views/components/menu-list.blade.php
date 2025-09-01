@props(['type', 'categories'])

<div class="menu-section grid gap-6 {{ $type }}" data-type="{{ $type }}">
    @foreach($categories as $category)
        <div class="menu-category mb-6 {{ $category->slug }}" data-category="{{ $type }}">
            <h2 class="text-2xl font-bold text-gray-800 capitalize">
                {{ $category['title_ua'] }} ({{ $category['title_en'] }})
            </h2>

            <div class="menu-items grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($category['items'] as $item)
                    @php
                        // фільтруємо варіанти без спецпропозицій
                        $visibleVariants = collect($item['variants'])->filter(fn($v) => !$v['spec_offer']);
                    @endphp

                    @if($visibleVariants->isNotEmpty())
                        <div class="menu-restaurant p-6 border rounded-xl shadow-lg
                            bg-white
                            hover:shadow-2xl hover:scale-[1.02] transition-all duration-300">

                            <span class="block font-semibold text-lg text-gray-900">
                                {{ $item['title_ua'] }} ({{ $item['title_en'] }})
                            </span>

                            @if(!empty($item['description_ua']))
                                <span class="block mt-1 text-sm text-gray-600">
                                    {{ $item['description_ua'] }}
                                </span>
                            @endif

                            <div class="mt-4">
                                @foreach($visibleVariants as $variant)
                                    <p class="text-sm text-gray-700">
                                        {{ $variant['output'] ? $variant['output'] . ' ' . $variant['volume'] . ' — ' : '' }}
                                        <span class="text-amber-600 font-bold text-base">
                                            {{ $variant['price'] }} {{ $variant['currency'] }}
                                        </span>
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
</div>
