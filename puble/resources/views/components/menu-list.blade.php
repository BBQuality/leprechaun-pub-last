@props(['type', 'categories'])

<div class="menu-section grid gap-6 {{ $type }}" data-type="{{ $type }}">
    <h2 class="text-2xl font-bold text-gray-800 capitalize">{{ $type }}</h2>

    @foreach($categories as $category)
        <div class="menu-category mb-6 {{ $category->slug }}" data-category="{{ $type }}">
            <h3 class="text-xl font-semibold text-gray-700 capitalize mb-4">
                {{ $category->title_ua }} ({{ $category->title_en }})
            </h3>

            <div class="menu-items grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($category->items as $item)
                    <div class="menu-restaurant p-6 border rounded-lg shadow-lg bg-white hover:shadow-xl transition-shadow duration-300">
                        <span class="block font-semibold text-lg text-gray-800">
                            {{ $item->title_ua }} ({{ $item->title_en }})
                        </span>

                        @if($item->description_ua)
                            <span class="text-sm text-gray-500">{{ $item->description_ua }}</span>
                        @endif

                        <p class="text-sm text-gray-700 mt-4">
                            {{ $item->output ? $item->output . ' — ' : '' }}
                            <span class="text-yellow-600 font-semibold">
                                {{ $item->price }} {{ $item->currency }}
                            </span>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
