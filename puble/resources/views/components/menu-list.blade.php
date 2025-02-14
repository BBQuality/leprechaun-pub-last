
@props(['groupedMenu'])

@foreach($groupedMenu as $type => $categories)
    <div class="menu-section {{ $type }}" data-type="{{ $type }}" >

        
        @foreach($categories as $category => $items)
            <div class="menu-category mb-6 {{ $category }}" data-category="{{ $type }}" >
                

                @foreach($items as $item)
                    <div class="menu-restaurant p-4 border rounded-lg shadow-sm mb-4">
                        <span class="block font-semibold text-lg">
                            {{ $item->title_ua }} ({{ $item->title_en }})
                        </span>
                        
                        <span class="text-sm text-gray-500">{{ $item->description_ua }}</span>

                        @if($item->variants->isNotEmpty())
                            <ul class="mt-2">
                                @foreach($item->variants as $variant)
                                    <li class="text-sm">
                                        <span class="font-semibold">{{ $variant->output }} ({{ $variant->volume }}) – </span> 
                                        <span class="text-yellow-600 font-semibold">{{ $variant->price }} {{ $variant->currency }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-sm text-gray-700 mt-2">Ціна: {{ $item->price ?? 'Немає даних' }}</p>
                        @endif
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endforeach