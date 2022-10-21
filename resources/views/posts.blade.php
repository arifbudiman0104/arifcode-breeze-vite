<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white dark:bg-slate-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div
                    class="p-6 bg-white dark:bg-slate-700 dark:text-white border-b border-gray-200 dark:border-slate-600">
                    Welcome to the Posts page!
                </div>
            </div> --}}

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5  w-full">
                <div
                    class="shadow hover:shadow-md w-full bg-white dark:bg-slate-700 sm:rounded-md md:rounded-lg overflow-hidden cursor-pointer">
                    <img class="object-cover w-full h-48"
                        src="https://images.unsplash.com/photo-1516205651411-aef33a44f7c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=420&q=80"
                        alt="Flower and sky" />

                    <div class="relative p-4">
                        <h3 class="text-lg md:text-xl font-bold text-gray-800 dark:text-white hover:text-red-500">
                            This is card title
                        </h3>
                        <p class="text-sm  text-gray-800 dark:text-white">by Arif Budiman Arrosyid</p>
                        <p class="text-sm  text-gray-800 dark:text-white">two days ago</p>

                        <p class="mt-4 text-sm md:text-base text-gray-600 dark:text-white">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda cumque deserunt dicta
                            fugit optio placeat temporibus.
                        </p>
                        <a href="#" class="inline-block mt-6 text-red-500 hover:text-red-400">
                            Read More
                        </a>
                    </div>
                </div>
                <div
                    class="shadow hover:shadow-md w-full bg-white dark:bg-slate-700 sm:rounded-md md:rounded-lg overflow-hidden cursor-pointer">
                    <img class="object-cover w-full h-48"
                        src="https://images.unsplash.com/photo-1516205651411-aef33a44f7c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=420&q=80"
                        alt="Flower and sky" />

                    <div class="relative p-4">
                        <h3 class="text-lg md:text-xl font-bold text-gray-800 dark:text-white hover:text-red-500">
                            This is card title
                        </h3>
                        <p class="text-sm  text-gray-800 dark:text-white">by Arif Budiman Arrosyid</p>
                        <p class="text-sm  text-gray-800 dark:text-white">two days ago</p>

                        <p class="mt-4 text-sm md:text-base text-gray-600 dark:text-white">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda cumque deserunt dicta
                            fugit optio placeat temporibus.
                        </p>
                        <a href="#" class="inline-block mt-6 text-red-500 hover:text-red-400">
                            Read More
                        </a>
                    </div>
                </div>
                <div
                    class="shadow hover:shadow-md w-full bg-white dark:bg-slate-700 sm:rounded-md md:rounded-lg overflow-hidden cursor-pointer">
                    <img class="object-cover w-full h-48"
                        src="https://images.unsplash.com/photo-1516205651411-aef33a44f7c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=420&q=80"
                        alt="Flower and sky" />

                    <div class="relative p-4">
                        <h3 class="text-lg md:text-xl font-bold text-gray-800 dark:text-white hover:text-red-500">
                            This is card title
                        </h3>
                        <p class="text-sm  text-gray-800 dark:text-white">by Arif Budiman Arrosyid</p>
                        <p class="text-sm  text-gray-800 dark:text-white">two days ago</p>

                        <p class="mt-4 text-sm md:text-base text-gray-600 dark:text-white">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda cumque deserunt dicta
                            fugit optio placeat temporibus.
                        </p>
                        <a href="#" class="inline-block mt-6 text-red-500 hover:text-red-400">
                            Read More
                        </a>
                    </div>
                </div>
                <div
                    class="shadow hover:shadow-md w-full bg-white dark:bg-slate-700 sm:rounded-md md:rounded-lg overflow-hidden cursor-pointer">
                    <img class="object-cover w-full h-48"
                        src="https://images.unsplash.com/photo-1516205651411-aef33a44f7c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=420&q=80"
                        alt="Flower and sky" />

                    <div class="relative p-4">
                        <h3 class="text-lg md:text-xl font-bold text-gray-800 dark:text-white hover:text-red-500">
                            This is card title
                        </h3>
                        <p class="text-sm  text-gray-800 dark:text-white">by Arif Budiman Arrosyid</p>
                        <p class="text-sm  text-gray-800 dark:text-white">two days ago</p>

                        <p class="mt-4 text-sm md:text-base text-gray-600 dark:text-white">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda cumque deserunt dicta
                            fugit optio placeat temporibus.
                        </p>
                        <a href="#" class="inline-block mt-6 text-red-500 hover:text-red-400">
                            Read More
                        </a>
                    </div>
                </div>
                <div
                    class="shadow hover:shadow-md w-full bg-white dark:bg-slate-700 sm:rounded-md md:rounded-lg overflow-hidden cursor-pointer">
                    <img class="object-cover w-full h-48"
                        src="https://images.unsplash.com/photo-1516205651411-aef33a44f7c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=420&q=80"
                        alt="Flower and sky" />

                    <div class="relative p-4">
                        <h3 class="text-lg md:text-xl font-bold text-gray-800 dark:text-white hover:text-red-500">
                            This is card title
                        </h3>
                        <p class="text-sm  text-gray-800 dark:text-white">by Arif Budiman Arrosyid</p>
                        <p class="text-sm  text-gray-800 dark:text-white">two days ago</p>

                        <p class="mt-4 text-sm md:text-base text-gray-600 dark:text-white">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda cumque deserunt dicta
                            fugit optio placeat temporibus.
                        </p>
                        <a href="#" class="inline-block mt-6 text-red-500 hover:text-red-400">
                            Read More
                        </a>
                    </div>
                </div>
                <div
                    class="shadow hover:shadow-md w-full bg-white dark:bg-slate-700 sm:rounded-md md:rounded-lg overflow-hidden cursor-pointer">
                    <img class="object-cover w-full h-48"
                        src="https://images.unsplash.com/photo-1516205651411-aef33a44f7c2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=420&q=80"
                        alt="Flower and sky" />

                    <div class="relative p-4">
                        <h3 class="text-lg md:text-xl font-bold text-gray-800 dark:text-white hover:text-red-500">
                            This is card title
                        </h3>
                        <p class="text-sm  text-gray-800 dark:text-white">by Arif Budiman Arrosyid</p>
                        <p class="text-sm  text-gray-800 dark:text-white">two days ago</p>

                        <p class="mt-4 text-sm md:text-base text-gray-600 dark:text-white">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda cumque deserunt dicta
                            fugit optio placeat temporibus.
                        </p>
                        <a href="#" class="inline-block mt-6 text-red-500 hover:text-red-400">
                            Read More
                        </a>
                    </div>
                </div>



            </div>
        </div>
    </div>
</x-guest-layout>
