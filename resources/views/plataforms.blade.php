<x-app-layout>
    <div class=" py-12">
        <div class=" max-w-5xl mx-auto px-5 md:px-6 lg:px-8">
            <div class="bg-blue-jeans overflow-hidden shadow-md rounded-lg">
                <div class="p-6 text-gray-modificate">
                    <form action="" method="GET">
                        <x-text-input list="providers" class="w-48 md:w-64 lg:w-64" id="provider" placeholder="Digite o servidor"></x-text-input>
                        <datalist id="providers">
                            <option>Amazon Prime</option>
                        </datalist>
                    </form>
                    <button type="button" class="border border-transparent bg-sky-500 hover:bg-sky-700 shadow-md rounded-md text-center text-sm p-2 text-white font-semibold mt-5">Amazon Prime</button>
                    <div class="mt-10 flex flex-col md:flex-row lg:flex-row md:space-x-3 lg:space-x-3">
                        <div class="flex space-x-2 items-center">
                            <img width="38" height="38" src="https://img.icons8.com/color/48/netflix-desktop-app--v1.png" alt="netflix-desktop-app--v1"/>
                            <x-input-label>Netflix</x-input-label>
                            <button type="button">
                                <img width="15" height="15" src="https://img.icons8.com/fluency-systems-filled/48/FA5252/cancel.png" alt="cancel"/>
                            </button>
                        </div>
                        <div class="flex space-x-2 items-center">
                            <img width="36" height="36" src="https://img.icons8.com/ios-filled/50/hbo-max.png" alt="hbo-max"/>
                            <x-input-label>HBO Max</x-input-label>
                            <button type="button">
                                <img width="15" height="15" src="https://img.icons8.com/fluency-systems-filled/48/FA5252/cancel.png" alt="cancel"/>
                            </button>
                        </div>
                        <div class="flex space-x-2 items-center">
                            <img width="40" height="40" src="https://img.icons8.com/fluency/48/disney-plus.png" alt="disney-plus"/>
                            <x-input-label>Disney Plus</x-input-label>
                            <button type="button">
                                <img width="15" height="15" src="https://img.icons8.com/fluency-systems-filled/48/FA5252/cancel.png" alt="cancel"/>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>