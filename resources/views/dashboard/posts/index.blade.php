<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Post Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-slate-700 overflow-hidden shadow-sm sm:rounded-lgg">
                <div
                    class="p-6 bg-white dark:bg-slate-700 dark:text-white border-b border-gray-200 dark:border-slate-600">
                    Welcome to the Dashboard Posts page!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
