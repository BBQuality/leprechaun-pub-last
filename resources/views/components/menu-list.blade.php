

@props(['type', 'categories'])

<div class="menu-section grid gap-6 {{ $type }}" data-type="{{ $type }}">
    <h2 class="text-2xl font-bold text-gray-800 capitalize">{{ $type }}</h2>

    @foreach($categories as $category => $items)
        <div class="menu-category mb-6 {{ $category }}" data-category="{{ $type }}">
            <h3 class="text-xl font-semibold text-gray-700 capitalize mb-4">{{ $category }}</h3>

            <div class="menu-items grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($items as $item)
                    <div class="menu-restaurant p-6 border rounded-lg shadow-lg bg-white hover:shadow-xl transition-shadow duration-300">
                        <span class="block font-semibold text-lg text-gray-800">
                            {{ $item->title_ua }} ({{ $item->title_en }})
                        </span>
                        
                        <span class="text-sm text-gray-500">{{ $item->description_ua }}</span>

                        @if($item->variants->isNotEmpty())
                            <ul class="mt-4">
                                @foreach($item->variants as $variant)
                                    <li class="text-sm">
                                        <span class="font-semibold text-gray-700">{{ $variant->output }} ({{ $variant->volume }}) – </span> 
                                        <span class="text-yellow-600 font-semibold">{{ $variant->price }} {{ $variant->currency }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-sm text-gray-700 mt-4">Ціна: {{ $item->price ?? 'Немає даних' }}</p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>