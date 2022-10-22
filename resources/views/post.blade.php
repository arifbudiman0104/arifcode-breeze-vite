<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="pt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white dark:bg-gray-900 overflow-hidden mb-6 shadow-sm sm:rounded-lg">
                {{-- <div class="mb-5 bg-white dark:bg-slate-700 overflow-hidden shadow-sm sm:rounded-lg">
                    <div
                        class="p-6 bg-white dark:bg-slate-700 dark:text-white border-b border-gray-200 dark:border-slate-600">
                        {{ $post->title }}
                    </div>
                </div> --}}

                <div
                    class="mt-6 p-6  prose prose-zinc dark:prose-invert mx-auto
                lg:prose-lg prose-a:text-red-400
                prose-blockquote:text-red-700 prose-code:text-red-400 prose-pre:text-red-400 prose-blockquote:bg-red-50 prose-blockquote:border-red-400 hover:prose-a:text-red-500">
                    <img src="{{ asset('img/1.jpg') }}" alt="" class="rounded-lg aspect-auto max-h-80 w-full">
                    <div>
                        <span
                            class="bg-red-100 text-red-800 text-xs font-semibold py-1 px-2 rounded dark:bg-red-200 dark:text-red-900">
                            {{
                            $post->category->name }}
                        </span>
                        <h1>{{ $post->title }}</h1>
                        <p>by {{ $post->user->name }} <span
                                class=" bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2 py-0.5 rounded ml-2 dark:bg-gray-700 dark:text-gray-300">
                                <svg aria-hidden="true" class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{\Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
                            </span>
                        </p>
                    </div>
                    {!! $post->content !!}
                </div>
            </div>
        </div>
</x-guest-layout>
