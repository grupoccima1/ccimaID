<x-app-layout>
    <section class="max-w-7xl mx-auto ">
        <div class=" py-2 bg-basic-50" style="opacity: .3;">
            <h2 class=" text-center font-bold text-sm  tracking-widest " >GAMMMA II</h2>
        </div>
        <div class="flex justify-center	 py-4">
            <img class="w-10 mr-2" src="{{asset('img/icons/masterplan.svg')}}" alt="">
            <h2 class=" text-center font-bold text-lg  my-4 uppercase" > Disponibilidad </h2>
        </div>
            <article class="mb-4 mx-8" x-data="{open : true }">
                <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200 hover:bg-gray-500" x-on:click="open= !open ">
                    <h2 class="font-bold text-lg mx-4" >GAMMA II</h2>
                </header>
                <div class=" bg-white px-4 py-2"  x-show="open">
                    <ul class="grid grid-cols-1 gap-2"> 
                        <li class="text-gray-700 text-base"> 
                            <div class="flex justify-between mt-2">
                                <div class="ml-4">
                                    <img class="mr-2" src="" alt="">
                                    <a href="https://grupoccima.com/#!/Navetec-Gamma_II_Business_Park" >
                                        General 
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between mt-2">
                                <div class="ml-4">
                                    <img class="mr-2" src="" alt="">
                                    <a href="https://grupoccima.com/#!/Navetec-Gamma_II_E1_Business_Park" >
                                        Etapa 1 
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between mt-2">
                                <div class="ml-4">
                                    <img class="mr-2" src="" alt="">
                                    <a href="https://grupoccima.com/#!/Navetec-Gamma_II_E2_Business_Park" >
                                        Etapa 2 
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </article>
    </section>
</x-app-layout>
