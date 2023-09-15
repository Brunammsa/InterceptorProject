<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-5xl mx-auto px-3 md:px-6 lg:px-8">
            <div class="bg-zinc-300 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-start items-baseline">
                    <div>
                        <select class="form-select rounded me-3" name="countries" id="countries">
                            <option>Brazil</option>
                        </select>
                    </div>
                    <div>
                        <x-text-input id="movies-name" class="block mt-1 md:w-48 lg:w-96" type="text" name="movies-name" placeholder="Digite o nome do filme" required autofocus/>
                    </div>
                </div>
                <div class="relative p-6 w-full rounded-xl bg-clip-border text-gray-700 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-5">
                    <div>
                        <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-700">
                            <a href="#!">
                                <img class="rounded-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt=""/></a>
                            <div class="p-6 text-center text-center">
                                <h5
                                class="mb-2 text-sm text-center font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                2023
                                </h5>
                                <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                batman
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-700">
                            <a href="#!">
                                <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" /></a>
                            <div class="p-6 text-center">
                                <h5
                                class="mb-2 text-sm text-center font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                2023
                                </h5>
                                <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                titanic
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-700">
                            <a href="#!">
                                <img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" /></a>
                            <div class="p-6 text-center">
                                <h5
                                class="mb-2 text-sm text-center font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                2023
                                </h5>
                                <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                avengers
                                </p>
                            </div>
                        </div>
                    </div>


                    
                </div>
                <div class="p-6 flex justify-center">
                    1 2 3 ... 100
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
