<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-white">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 ">
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
                <div
                    class="w-full overflow-hidden bg-white shadow hover:shadow-md dark:bg-gray-900 sm:rounded-md md:rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-48" src="{{ asset('img/3.jpg') }}" alt="Flower and sky" />


                    <div class="relative p-4">
                        <div class="mb-2">
                            <span class="px-2 py-1 mr-2 text-xs font-semibold text-red-800 bg-red-100 rounded dark:bg-red-200 dark:text-red-900">
                                {{
                                $post->category->name }}
                            </span>

                        </div>
                        <a href="/post/{{ $post->slug }}"
                            class="text-lg font-bold text-gray-800 md:text-xl dark:text-white hover:text-red-400">{{
                            $post->title }}</a>


                        <p class="pt-3 pb-3 text-sm text-gray-800 dark:text-white ">by <a
                                href="/posts?author={{$post->author->username}}" class="hover:text-red-400"> {{
                                $post->author->name
                                }}</a>
                            <span class="inline-flex items-center px-2 py-1 ml-2 text-xs font-semibold text-gray-900 bg-gray-100 rounded dark:bg-gray-700 dark:text-gray-300">
                                <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{\Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
                            </span>

                        </p>




                        <p class="text-sm text-gray-600  md:text-base dark:text-white">
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

            <div class="pt-5">
                {{ $posts->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
</x-guest-layout>
