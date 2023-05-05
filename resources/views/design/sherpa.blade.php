

<x-app-layout>
    <div class=" py-2 bg-basic-50" style="opacity: .3;">
        <h2 class="text-center font-bold text-sm tracking-widest uppercase pt-2" >Desing sherpa</h2>
    </div>
    
    <article class="mb-4 mx-8 shadow" x-data="{open : true }">
        <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200 hover:bg-gray-500"
            x-on:click="open= !open ">
            <h2 class="font-bold text-lg mx-4">Logos</h2>
        </header>

        <div class=" bg-white px-4 py-2" x-show="open">
            <ul class="grid grid-cols-1 gap-2">
                <li class="text-gray-700 text-base">
                    <div class="flex justify-between mt-2">
                        <div class="flex">
                            <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                            <a href="{{asset('file/design/sherpa/logos/fondo_transparente.svg')}}" download>
                                Fondo Transparente
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-between mt-2">
                        <div class="flex">
                            <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                            <a href="{{asset('file/design/sherpa/logos/formato_svg.svg')}}" download>
                                Formato SVG
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </article>
    <article class="mb-4 mx-8 shadow" x-data="{open : true }">
        <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200 hover:bg-gray-500"
            x-on:click="open= !open ">
            <h2 class="font-bold text-lg mx-4">videos</h2>
        </header>

        <div class=" bg-white px-4 py-2" x-show="open">
            <ul class="grid grid-cols-1 gap-2">
                <li class="text-gray-700 text-base">
                    <div class="flex justify-between mt-2">
                        <div class="ml-4">
                            <img class="mr-2" src="" alt="">
                            <a href="https://youtu.be/uTsV8So1JuE">
                                sherpa 
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </article>
    

   
    
    
</x-app-layout>