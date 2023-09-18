<x-app-layout>
    <div class=" py-12">
        <div class=" max-w-5xl mx-auto px-5 md:px-6 lg:px-8">
            <div class="bg-zinc-300 overflow-hidden shadow-md rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="" method="GET">
                        <x-text-input list="providers" class="w-48 md:w-64 lg:w-64" id="provider" placeholder="Digite o servidor"></x-text-input>
                        <datalist id="providers">
                            <option>Amazon Prime</option>
                        </datalist>
                    </form>
                    <button type="button" class="border border-zinc-400 rounded active mt-3 w-48 p-2 md:w-64 lg:w-64 shadow-md" id="providers-result">Amazon Prime</button>
                    <div class="mt-10 grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div class="flex justify-start space-x-2 items-center">
                            <img width="38" height="38" src="https://img.icons8.com/color/48/netflix-desktop-app--v1.png" alt="netflix-desktop-app--v1"/>
                            <x-input-label>Netflix</x-input-label>
                            <button type="button">
                                <img width="15" height="15" src="https://img.icons8.com/fluency-systems-filled/48/FA5252/cancel.png" alt="cancel"/>
                            </button>
                        </div>
                        <div class="flex justify-start space-x-2 items-center">
                            <img width="36" height="36" src="https://img.icons8.com/ios-filled/50/hbo-max.png" alt="hbo-max"/>
                            <x-input-label>HBO Max</x-input-label>
                            <button type="button">
                                <img width="15" height="15" src="https://img.icons8.com/fluency-systems-filled/48/FA5252/cancel.png" alt="cancel"/>
                            </button>
                        </div>
                        <div class="flex justify-start space-x-2 items-center">
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