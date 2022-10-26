<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-white">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden ">

                <div class="grid w-full grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
                    @foreach ($categories as $category )
                    <div>
                        <a href="/posts?category={{$category->slug}}"
                            class="block max-w-md p-6 mx-auto bg-white border rounded-lg shadow-md h-44 hover:bg-gray-100 dark:bg-gray-900 dark:border-gray-800 dark:hover:bg-gray-700">
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
