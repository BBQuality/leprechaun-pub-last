{{-- resources/views/admin/menu_editor/drink/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Напої</h1>
            <a href="{{ route('menu-editor.drink.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                + Додати новий
            </a>
        </div>

        @if(session('success'))
            <div class="mb-4 text-green-700 font-semibold">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full table-auto border border-gray-300">
            <thead class="bg-gray-100">
    <tr>
        <th class="px-4 py-2">Назва</th>
        <th class="px-4 py-2">Опис</th>
        <th class="px-4 py-2">Об'єми/Ціни</th>
        <th class="px-4 py-2">Категорія</th>
        <th class="px-4 py-2">Дії</th> <!-- ось це -->
    </tr>
            </thead>

            <tbody>
                @foreach($drinks as $drink)
                    <tr class="border-b">
    <td class="px-4 py-2">{{ $drink->title_ua }}</td>
    <td class="px-4 py-2 text-sm">{{ $drink->description_ua }}</td>
    <td class="px-4 py-2">
        @if($drink->menuItem)
            @foreach($drink->menuItem->variants as $variant)
                <div>{{ $variant->output }} — {{ $variant->price }} {{ $variant->currency }}</div>
            @endforeach
        @else
            <div class="text-red-600">⚠️ Немає menuItem-звʼязку</div>
        @endif
    </td>
    <td class="px-4 py-2">{{ $drink->category_ua }}</td>
    <td class="px-4 py-2 flex gap-2">
        <a href="{{ route('menu-editor.drink.edit', $drink->id) }}" class="text-blue-600 hover:underline">Редагувати</a>

        <form action="{{ route('menu-editor.drink.delete', $drink->id) }}" method="POST" onsubmit="return confirm('Видалити позицію?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600 hover:underline">Видалити</button>
        </form>
    </td>
</tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
