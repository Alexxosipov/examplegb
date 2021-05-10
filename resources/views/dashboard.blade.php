<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>

    <x-content-body>
        <div class="flex flex-wrap -mx-3">
            <div class="w-full md:w-1/4 p-3">
                <div class="bg-red-300 w-full block h-32"></div>
            </div>

            <div class="w-full md:w-1/4 p-3">
                <div class="bg-red-300 w-full block h-32"></div>
            </div>

            <div class="w-full md:w-1/4 p-3">
                <div class="bg-red-300 w-full block h-32"></div>
            </div>

            <div class="w-full md:w-1/4 p-3">
                <div class="bg-red-300 w-full block h-32"></div>
            </div>
        </div>
    </x-content-body>

</x-app-layout>
