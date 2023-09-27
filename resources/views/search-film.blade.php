<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto px-5 md:px-6 lg:px-8">
            <div class="bg-blue-jeans dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-start items-baseline">
                    <div>
                        <select class="form-select rounded me-3" name="countries" id="countries">
                            <option>Brazil</option>
                        </select>
                    </div>
                    <div>
                        <x-text-input id="movies-name" class="block mt-1 md:w-80 lg:w-96" type="text" name="movies-name" placeholder="Digite o nome do filme" required autofocus/>
                    </div>
                </div>
                <div class="relative p-6 w-full bg-clip-border text-gray-700 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-5">
                    <div>
                        <div class="block rounded-lg bg-gray-modificate shadow-lg dark:bg-neutral-700 cursor-pointer">
                            <a id="open-modal"><img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt=""/></a>
                        </div>
                        <div class="text-center text-blue-jeans bg-gray-modificate rounded-b-lg">
                            <h2>Pinóquio</h2>
                            <p>2003</p>
                        </div>
                    </div>
                    <div>
                        <div class="block rounded-lg bg-gray-modificate shadow-lg dark:bg-neutral-700 cursor-pointer">
                            <a id="open-modal"><img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt=""/></a>
                        </div>
                        <div class="text-center text-blue-jeans bg-gray-modificate rounded-b-lg">
                            <h2>Tarzan</h2>
                            <p>2000</p>
                        </div>
                    </div>
                    <div>
                        <div class="block rounded-lg bg-gray-modificate shadow-lg dark:bg-neutral-700 cursor-pointer">
                            <a id="open-modal"><img class="rounded-t-lg" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt=""/></a>
                        </div>
                        <div class="text-center text-blue-jeans bg-gray-modificate rounded-b-lg">
                            <h2>A pequena sereia</h2>
                            <p>2023</p>
                        </div>
                    </div>
                    <dialog class="rounded-lg shadow-lg">
                        @include('index-movie')
                    </dialog>
                </div>
                <div class="text-gray-modificate p-6 flex justify-center">
                    1 2 3 ... 100
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    const open = document.getElementById("open-modal");
    const modal = document.querySelector('dialog');
    const close = document.getElementById("close-button")

    open.onclick = function () {
        modal.showModal();
    }

    close.onclick = function(){
        modal.close();
    }
</script>
