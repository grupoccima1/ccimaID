
@php

@endphp

<x-app-layout>
    <section class="mt-2 max-w-7xl mx-auto ">
        <div class=" py-2 bg-basic-50" style="opacity: .3;">
            <h2 class=" text-center font-bold text-sm  tracking-widest " >SERVER</h2>
        </div>
        <div class="flex justify-center	 py-4">
            <img class="w-10 mr-2" src="{{asset('img/icons/masterplan.svg')}}" alt="">
            <h2 class=" text-center font-bold text-lg  my-4 uppercase" >master plan</h2>
        </div>
        <article class="mb-4 mx-8" x-data="{open : true }">
            <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200 hover:bg-gray-500" x-on:click="open= !open ">
                <h2 class="font-bold text-lg mx-4" > Master Plan</h2>
            </header>

            <div class=" bg-white px-4 py-2"  x-show="open">
                <ul class="grid grid-cols-1 gap-2 mx-2"> 
                    <li>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                  <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/navetec/server/masterplan/master_plan_general.pdf')}}" >
                                    Server San Luis General
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/navetec/server/masterplan/master_plan_general.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                  <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/navetec/server/masterplan/master_plan_etapa_I.pdf')}}" >
                                    Etapa I
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/navetec/server/masterplan/master_plan_etapa_I.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                  <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/navetec/server/masterplan/master_plan_etapa_II.pdf')}}" >
                                    Etapa II
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/navetec/server/masterplan/master_plan_etapa_II.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </article>
    </section>
</x-app-layout>
