<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-white">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="py-40 overflow-hidden bg-white shadow-sm dark:bg-gray-900 sm:py-20 sm:rounded-lg">
                <div
                    class="flex items-center justify-center bg-white  max-w-40 min-h-xl dark:bg-gray-900 dark:text-white">
                    <div class="flex flex-col items-center justify-center px-5 sm:px-12 md:px-32 lg:px-60 ">
                        <div class="relative flex items-center justify-center">

                            <div
                                class="absolute hidden rounded-lg dark:block -inset-2 bg-gradient-to-l from-red-500 to-yellow-500 blur-xl">
                            </div>
                            <div
                                class="relative flex items-center justify-center px-3 py-2 bg-gray-100 rounded-lg dark:bg-gray-900">
                                <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-5 h-5 mr-2">
                                <p class="text-xl font-bold text-gray-800 dark:text-white">Arif<span
                                        class="text-red-500">Code</span></p>
                            </div>
                        </div>
                        {{-- <div
                            class="flex items-center justify-center px-3 py-2 mb-5 bg-gray-100 rounded-lg dark:bg-gray-700">
                            <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-5 h-5 mr-2">
                            <p class="text-xl font-bold text-gray-800 dark:text-white">Arif<span
                                    class="text-red-500">Code</span></p>
                        </div> --}}
                        <h1 class="mt-10 text-2xl font-bold">Hi there.. 👋👋👋</h1>
                        <h1 class="mt-3 text-2xl font-bold">I hope you like the website,</h1>
                        <p class="pt-5 text-lg">You can also contribute to this blog as a writter or developer or both,
                            the repository of this blog is on the navbar.</p>
                        <h1 class="pt-5 text-2xl font-bold"> Well hello 😄 </h1>
                        <p class="pt-5 text-lg">I'm Arif Budiman Arrosyid, a fullstack web developer from
                            Indonesia. Code since 2018, I'm studying Information Technology at
                            <a href="https://www.umy.ac.id/" class="text-red-500 hover:text-red-700" target="_blank">
                                Muhammadiyah University of Yogyakarta</a>. I hope I can graduate soon. Amiin.
                        </p>
                        <p class="pt-5 text-lg">I
                            like to learn about web design and web development. I'm currently learning Laravel and
                            Tailwind CSS. ( What is Bootstrap? 😁 ) Check out my
                            <a href="https://github.com/arifbudimanarrosyid" class="text-red-500 hover:text-red-700"
                                target="_blank">
                                Github
                            </a>
                            repo to see the project I am currently working on.
                        </p>
                        <p class="pt-5 text-lg">I also like potrait photography, you can check out my
                            <a href="https://www.instagram.com/arifbudimanarrosyid/"
                                class="text-red-500 hover:text-red-700" target="_blank">Instagram</a>
                            to see my photos. Photographer is my side job.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
