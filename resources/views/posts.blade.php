<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-white">
            {{ $title }}
        </h2>
    </x-slot>


    <div class="py-5">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 ">
            {{-- <section class="pt-24 overflow-hidden pb-36">
                <div class="container px-4 mx-auto">
                    <h2
                        class="mb-4 text-6xl font-bold leading-tight text-center dark:text-white md:text-7xl font-heading tracking-px-n">
                        Latest
                        from Blog</h2>
                    <p class="mx-auto mb-24 font-medium leading-relaxed text-center text-gray-600 md:max-w-lg">Lorem
                        ipsum dolor
                        sit amet, to the consectr adipiscing elit. Volutpat tempor to the condimentum vitae vel purus.
                    </p>
                    <div class="flex flex-wrap -m-8">
                        <div class="w-full p-8 md:w-1/2">
                            <div class="flex flex-wrap -m-4 lg:items-center">
                                <div class="w-auto p-4">
                                    <div class="overflow-hidden rounded-xl">
                                        <img class="h-40 transition duration-1000 ease-in-out transform hover:scale-105"
                                            src="{{ asset('img/3.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="flex-1 p-4">
                                    <div class="md:max-w-xs">
                                        <div class="flex flex-col justify-between h-full">
                                            <div class="mb-6">
                                                <p
                                                    class="mb-1.5 text-sm text-gray-500 font-medium uppercase tracking-px">
                                                    Product</p>
                                                <a class="inline-block hover:text-gray-800 hover:underline" href="#">
                                                    <h3 class="text-xl font-semibold leading-normal dark:text-white">An
                                                        IT services company that
                                                        can grow your business</h3>
                                                </a>
                                            </div>
                                            <div class="flex flex-wrap items-center -m-1">

                                                <div class="w-auto p-1">
                                                    <p class="text-sm font-semibold leading-relaxed dark:text-white">by
                                                        Wade Warren</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            {{-- <div class="mb-5 overflow-hidden bg-white shadow-sm dark:bg-slate-700 sm:rounded-lg">
                <div
                    class="p-6 bg-white border-b border-gray-200 dark:bg-slate-700 dark:text-white dark:border-slate-600">
                    Welcome to the Posts page!
                </div>
            </div> --}}
            <div class="p-2 mb-5 overflow-hidden ">
                <form action="/posts">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search
                    </label>
                    <div class="relative ">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-red-500 dark:text-red-500" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif

                        @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif

                        <input type="text" id="default-search"
                            class="block w-full p-4 pl-10 text-gray-900 border rounded-lg shadow-sm form-control text-md bg-gray-50 border-gray-50 focus:ring-red-500 focus:border-red-500 dark:bg-gray-900 dark:border-gray-800 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                            placeholder="Search posts..." name="search" value="{{ request('search') }}">
                        <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-red-400 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Search</button>
                    </div>
                </form>
            </div>
            @if ($posts->count())
            <div class="grid w-full grid-cols-1 gap-5 mb-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($posts as $post )
                <div class="w-full overflow-hidden bg-white shadow-sm dark:bg-gray-900 sm:rounded-md md:rounded-lg ">
                    <img class="object-cover w-full h-48" src="{{ asset('img/3.jpg') }}" alt="Flower and sky" />


                    <div class="relative p-4">
                        <div class="mb-2">
                            <span
                                class="px-2 py-1 mr-2 text-xs font-semibold text-red-800 bg-red-100 rounded dark:bg-red-200 dark:text-red-900">
                                {{
                                $post->category->name }}
                            </span>

                        </div>
                        <a href="/post/{{ $post->slug }}"
                            class="text-lg font-bold text-gray-800 md:text-xl dark:text-white hover:underline hover:text-red-400">{{
                            $post->title }}</a>


                        <p class="pt-3 pb-3 text-sm text-gray-800 dark:text-white ">by <a
                                href="/posts?author={{$post->author->username}}" class="hover:text-red-400"> {{
                                $post->author->name
                                }}</a>
                            <span
                                class="inline-flex items-center px-2 py-1 ml-2 text-xs font-semibold text-gray-900 bg-gray-100 rounded dark:bg-gray-700 dark:text-gray-300">
                                <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{\Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
                            </span>
                        </p>
                        <p class="text-sm text-gray-600 md:text-base dark:text-white">
                            {{$post->excerpt}}
                        </p>
                        <a href="/post/{{ $post->slug }}" class="inline-block mt-6 text-red-500 hover:text-red-400">
                            Read More
                        </a>
                    </div>
                </div>
                @endforeach

            </div>

            @else
            <div class="mb-5 overflow-hidden bg-white shadow-sm dark:bg-gray-700 sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-900 dark:text-white ">
                    <p class="text-xl font-bold">

                        No posts found!
                    </p>
                </div>
            </div>
            @endif

            <div class="">
                {{ $posts->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
</x-guest-layout>
