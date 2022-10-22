<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" p-5  overflow-hidden ">

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-5  w-full">
                    @foreach ($categories as $category )
                    <div>
                        <a href="#"
                            class="block p-6 h-44 mx-auto max-w-md bg-white rounded-lg border  shadow-md hover:bg-gray-100 dark:bg-gray-900 dark:border-gray-800 dark:hover:bg-gray-700">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 hover:text-red-400 dark:text-white">{{
                                $category->name }}</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">{{
                                $category->description }}</p>
                        </a>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
