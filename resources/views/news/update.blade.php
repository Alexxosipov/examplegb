<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>

    <x-content-body>
        <div class="max-w-md">
            <div class="my-8">
                <x-auth-validation-errors :errors="$errors"/>
            </div>
            <form method="POST" action="{{ route('news.update', compact('news')) }}">
            @csrf

            <!-- Email Address -->
                <div>
                    <x-label for="title" :value="__('Title')" />

                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="$news->title" required autofocus />
                </div>

                <div class="mt-4">
                    <x-label for="description" :value="__('Description')" />

                    <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="$news->description" required autofocus />
                </div>

                <div>
                    <x-label for="rating" :value="__('Rating')" />

                    <x-input id="rating" class="block mt-1 w-full" type="number" min="1" max="5" name="rating" :value="$news->rating" required autofocus />
                </div>

                <div class="mt-4">
                    <x-label for="category_id" :value="__('Category')" />

                    <select name="category_id" id="category_id" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @if($news->category_id === $category->id) selected @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-4">
                    <x-button>
                        {{ __('Update') }}
                    </x-button>
                </div>
            </form>
        </div>
    </x-content-body>
</x-app-layout>
