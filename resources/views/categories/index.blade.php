<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <x-content-body>
        <ul>
            @foreach($categories as $category)
                <li><a href="{{ route('categories.show', compact('category')) }}" class="">{{ $category->name }} | Count: {{ $category->news_count }} | avg rating: {{ number_format($category->news_avg_rating, 1) }} </a></li>
            @endforeach
        </ul>
    </x-content-body>

</x-app-layout>
