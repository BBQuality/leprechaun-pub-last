{{-- resources/views/admin/menu_editor/drink/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-xl font-bold mb-4">Додати новий напій</h1>

    <form action="{{ route('menu-editor.drink.store') }}" method="POST" class="space-y-4">
        @csrf

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label>Назва UA</label>
                <input name="title_ua" required class="w-full border rounded px-2 py-1" />
            </div>
            <div>
                <label>Назва EN</label>
                <input name="title_en" class="w-full border rounded px-2 py-1" />
            </div>

            <div class="col-span-2">
                <label>Опис UA</label>
                <textarea name="description_ua" class="w-full border rounded px-2 py-1"></textarea>
            </div>
            <div class="col-span-2">
                <label>Опис EN</label>
                <textarea name="description_en" class="w-full border rounded px-2 py-1"></textarea>
            </div>

            <div>
                <label>Обʼєм 1</label>
                <input name="output_1" required class="w-full border rounded px-2 py-1" />
            </div>
            <div>
                <label>Ціна 1</label>
                <input name="price_1" required type="number" step="0.01" class="w-full border rounded px-2 py-1" />
            </div>

            <div>
                <label>Обʼєм 2</label>
                <input name="output_2" class="w-full border rounded px-2 py-1" />
            </div>
            <div>
                <label>Ціна 2</label>
                <input name="price_2" type="number" step="0.01" class="w-full border rounded px-2 py-1" />
            </div>

            <div>
                <label>Категорія UA</label>
                <input name="category_ua" class="w-full border rounded px-2 py-1" />
            </div>
            <div>
                <label>Категорія EN</label>
                <input name="category_en" class="w-full border rounded px-2 py-1" />
            </div>

            <div>
                <label>ID Категорії</label>
                <input name="id_category" type="number" required class="w-full border rounded px-2 py-1" />
            </div>
            <div>
                <label>Валюта</label>
                <input name="currency" value="грн/UAH" class="w-full border rounded px-2 py-1" />
            </div>

            <div class="col-span-2">
                <label>Акційна пропозиція</label>
                <input type="checkbox" name="spec_offer" value="1" />
            </div>
        </div>

        <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Зберегти
        </button>
    </form>
</div>
@endsection
