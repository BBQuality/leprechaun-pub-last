@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Редагувати напій</h1>

    <form action="{{ route('menu-editor.drink.update', $drink->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        {{-- Назва UA --}}
        <div>
            <label for="title_ua" class="block font-semibold">Назва (UA)</label>
            <input type="text" name="title_ua" id="title_ua" value="{{ old('title_ua', $drink->title_ua) }}"
                   class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        {{-- Назва EN --}}
        <div>
            <label for="title_en" class="block font-semibold">Назва (EN)</label>
            <input type="text" name="title_en" id="title_en" value="{{ old('title_en', $drink->title_en) }}"
                   class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        {{-- Опис UA --}}
        <div>
            <label for="description_ua" class="block font-semibold">Опис (UA)</label>
            <textarea name="description_ua" id="description_ua" class="w-full border border-gray-300 rounded px-3 py-2">{{ old('description_ua', $drink->description_ua) }}</textarea>
        </div>

        {{-- Опис EN --}}
        <div>
            <label for="description_en" class="block font-semibold">Опис (EN)</label>
            <textarea name="description_en" id="description_en" class="w-full border border-gray-300 rounded px-3 py-2">{{ old('description_en', $drink->description_en) }}</textarea>
        </div>

        {{-- Варіанти обʼємів і цін --}}
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="output_1" class="block font-semibold">Порція 1</label>
                <input type="text" name="output_1" id="output_1" value="{{ old('output_1', $drink->output_1) }}"
                       class="w-full border border-gray-300 rounded px-3 py-2">
            </div>
            <div>
                <label for="price_1" class="block font-semibold">Ціна 1</label>
                <input type="number" step="0.01" name="price_1" id="price_1" value="{{ old('price_1', $drink->price_1) }}"
                       class="w-full border border-gray-300 rounded px-3 py-2">
            </div>
            <div>
                <label for="output_2" class="block font-semibold">Порція 2</label>
                <input type="text" name="output_2" id="output_2" value="{{ old('output_2', $drink->output_2) }}"
                       class="w-full border border-gray-300 rounded px-3 py-2">
            </div>
            <div>
                <label for="price_2" class="block font-semibold">Ціна 2</label>
                <input type="number" step="0.01" name="price_2" id="price_2" value="{{ old('price_2', $drink->price_2) }}"
                       class="w-full border border-gray-300 rounded px-3 py-2">
            </div>
        </div>

        {{-- Інше --}}
        <div>
            <label for="volume" class="block font-semibold">Обʼєм</label>
            <input type="text" name="volume" id="volume" value="{{ old('volume', $drink->volume) }}"
                   class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div>
            <label for="currency" class="block font-semibold">Валюта</label>
            <input type="text" name="currency" id="currency" value="{{ old('currency', $drink->currency ?? 'грн/UAH') }}"
                   class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div>
            <label for="id_category" class="block font-semibold">ID категорії</label>
            <input type="number" name="id_category" id="id_category" value="{{ old('id_category', $drink->id_category) }}"
                   class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div>
            <label for="category_ua" class="block font-semibold">Категорія UA</label>
            <input type="text" name="category_ua" id="category_ua" value="{{ old('category_ua', $drink->category_ua) }}"
                   class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div>
            <label for="category_en" class="block font-semibold">Категорія EN</label>
            <input type="text" name="category_en" id="category_en" value="{{ old('category_en', $drink->category_en) }}"
                   class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div class="flex items-center space-x-2">
            <input type="checkbox" name="spec_offer" id="spec_offer" value="1"
                {{ old('spec_offer', $drink->spec_offer) ? 'checked' : '' }}>
            <label for="spec_offer" class="font-semibold">Спецпропозиція</label>
        </div>

        {{-- Кнопка --}}
        <div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Зберегти зміни
            </button>
        </div>
    </form>
</div>
@endsection
