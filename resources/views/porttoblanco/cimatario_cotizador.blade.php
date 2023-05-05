<x-app-layout>
    <section class="mt-2 max-w-7xl mx-auto ">
        <div class=" py-2 bg-basic-50" style="opacity: .3;">
            <h2 class=" text-center font-bold text-sm  tracking-widest "> PORTTO BLANCO CIMATARIO </h2>
        </div>
        <div class="flex justify-center	 py-4">
            <img class="w-10 mr-2" src="{{asset('img/icons/masterplan.svg')}}" alt="">
            <h2 class=" text-center font-bold text-lg  my-4 uppercase"> Cotizador </h2>
        </div>
        
        <article class="mb-4 mx-8 shadow" x-data="{open : true }">
            <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200 hover:bg-gray-500"
                x-on:click="open= !open ">
                <h2 class="font-bold text-lg mx-4">Manglar</h2>
            </header>

            <div class=" bg-white px-4 py-2" x-show="open">
                <ul class="grid grid-cols-1 gap-2">
                    <li class="text-gray-700 text-base">
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="http://grupoccima.com/#!/Portto_Blanco-Manglar_1">
                                    Manglar I
                                </a>
                            </div>
                        </div>
                          <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="http://grupoccima.com/#!/Portto_Blanco-Manglar_2">
                                    Manglar II
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
                <h2 class="font-bold text-lg mx-4"> Lago</h2>
            </header>

            <div class=" bg-white px-4 py-2" x-show="open">
                <ul class="grid grid-cols-1 gap-2">
                    <li class="text-gray-700 text-base">
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="http://grupoccima.com/#!/Portto_Blanco-Lago_1">
                                    Lago I
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </article>
        <article class="mb-4 mx-8 shadow" x-data="{open : false }">
            <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200 hover:bg-gray-500"
                x-on:click="open= !open ">
                <h2 class="font-bold text-lg mx-4"> Bosque</h2>
            </header>

            <div class=" bg-white px-4 py-2" x-show="open">
                <ul class="grid grid-cols-1 gap-2">
                    <li class="text-gray-700 text-base">

                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="http://grupoccima.com/#!/Portto_Blanco-Bosque_1">
                                    Bosque I
                                </a>
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="http://grupoccima.com/#!/Portto_Blanco-Bosque_2">
                                    Bosque II
                                </a>
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="http://grupoccima.com/#!/Portto_Blanco-Bosque_3">
                                    Bosque III
                                </a>
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="http://grupoccima.com/#!/Portto_Blanco-Bosque_4">
                                    Bosque IV
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </article>
        <article class="mb-4 mx-8 shadow" x-data="{open : false }">
            <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200 hover:bg-gray-500"
                x-on:click="open= !open ">
                <h2 class="font-bold text-lg mx-4"> Selva</h2>
            </header>

            <div class=" bg-white px-4 py-2" x-show="open">
                <ul class="grid grid-cols-1 gap-2">
                    <li class="text-gray-700 text-base">
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="http://grupoccima.com/#!/Portto_Blanco-Selva_1">
                                    Selva I
                                </a>
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="http://grupoccima.com/#!/Portto_Blanco-Selva_2">
                                    Selva II
                                </a>
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="http://grupoccima.com/#!/Portto_Blanco-Selva_3">
                                    Selva III
                                </a>
                            </div>

                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="http://grupoccima.com/#!/Portto_Blanco-Selva_4">
                                    Selva IV
                                </a>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>

        </article>
        <article class="mb-4 mx-8 shadow" x-data="{open : false }">
            <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200 hover:bg-gray-500"
                x-on:click="open= !open ">
                <h2 class="font-bold text-lg mx-4"> Paramo</h2>
            </header>

            <div class=" bg-white px-4 py-2" x-show="open">
                <ul class="grid grid-cols-1 gap-2">
                    <li class="text-gray-700 text-base">
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="https://grupoccima.com/#!/Portto_Blanco-Paramo_1">
                                    Páramo I
                                </a>
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="https://grupoccima.com/#!/Portto_Blanco-Paramo_2">
                                    Páramo II
                                </a>
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="https://grupoccima.com/#!/Portto_Blanco-Paramo_3">
                                    Páramo III
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </article>
        <article class="mb-4 mx-8 shadow" x-data="{open : false }">
            <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200 hover:bg-gray-500"
                x-on:click="open= !open ">
                <h2 class="font-bold text-lg mx-4"> Taiga</h2>
            </header>

            <div class=" bg-white px-4 py-2" x-show="open">
                <ul class="grid grid-cols-1 gap-2">
                    <li class="text-gray-700 text-base">
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="">
                                    Taiga I
                                </a>
                            </div>

                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="">
                                    Taiga II
                                </a>
                            </div>

                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="">
                                    Taiga III
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </article>
        <article class="mb-4 mx-8 shadow" x-data="{open : false }">
            <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200 hover:bg-gray-500"
                x-on:click="open= !open ">
                <h2 class="font-bold text-lg mx-4"> Desierto</h2>
            </header>

            <div class=" bg-white px-4 py-2" x-show="open">
                <ul class="grid grid-cols-1 gap-2">
                    <li class="text-gray-700 text-base">
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="http://grupoccima.com/#!/Portto_Blanco-Desierto_Uno">
                                    Desierto I
                                </a>
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="https://grupoccima.com/#!/Portto_Blanco-Desierto_Dos">
                                    Desierto II
                                </a>
                            </div>

                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="https://grupoccima.com/#!/Portto_Blanco-Desierto_Tres">
                                    Desierto III
                                </a>
                            </div>

                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="https://grupoccima.com/#!/Portto_Blanco-Desierto_Cuatro">
                                    Desierto IV
                                </a>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>

        </article>
        <article class="mb-4 mx-8 shadow" x-data="{open : false }">
            <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200 hover:bg-gray-500"
                x-on:click="open= !open ">
                <h2 class="font-bold text-lg mx-4"> Estepa</h2>
            </header>

            <div class=" bg-white px-4 py-2" x-show="open">
                <ul class="grid grid-cols-1 gap-2">
                    <li class="text-gray-700 text-base">
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="">
                                    Estepa I
                                </a>
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="https://grupoccima.com/#!/Portto_Blanco-Desierto_Dos">
                                    Estepa II
                                </a>
                            </div>

                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="https://grupoccima.com/#!/Portto_Blanco-Desierto_Tres">
                                    Estepa III
                                </a>
                            </div>

                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="ml-4">
                                <img class="mr-2" src="" alt="">
                                <a href="https://grupoccima.com/#!/Portto_Blanco-Desierto_Cuatro">
                                    Estepa IV
                                </a>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>

        </article>

    </section>
</x-app-layout>
