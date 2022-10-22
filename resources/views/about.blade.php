<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div
                    class="p-6 bg-white h-screen dark:bg-gray-900 dark:text-white border-b border-gray-200 dark:border-gray-800">
                    Welcome to the About page!
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
