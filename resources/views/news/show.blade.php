<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>

    <x-content-body>
        <div class="my-8">
            <x-auth-validation-errors :errors="$errors"/>
        </div>
        <h1 class="text-lg">{{ $news->title }}</h1>
        <p class="text-xs text-gray-500 mt-10">{{ $news->created_at->format('d.m.Y') }}</p>
        <p class="mt-4">{{ $news->description }}</p>
        <a href="{{ route('news.edit', compact('news')) }}" class="mt-6 inline-block py-2 px-3 rounded-lg bg-indigo-200 text-xs font-bold uppercase text-indigo-700">Редактировать</a>
    </x-content-body>
</x-app-layout>
