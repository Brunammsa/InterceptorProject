<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 grid grid-flow-col justify-stretch flex flex-row items-baseline">
                    <div class=" basis-1/2">
                        <select class="form-select rounded me-3" name="countries" id="countries">
                            <option>Selecione o país de busca</option>
                            @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <x-text-input id="movies-name" class="block mt-1" type="text" name="movies-name" placeholder="Digite aqui o nome do filme" required autofocus/>
                        <x-input-error :messages="$errors->get('movies-name')" class="mt-2" />
                    </div>
                    <div class="basis-1/4">
                        <x-primary-button>buscar</x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
