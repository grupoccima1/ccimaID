
@php

@endphp

<x-app-layout>
    <section class="mt-2 max-w-7xl mx-auto ">
        <div class=" py-2 bg-basic-50" style="opacity: .3;">
            <h2 class=" text-center font-bold text-sm  tracking-widest " > PORTTO BLANCO CIMATARIO  </h2>
        </div>
        <div class="flex justify-center	 py-4">
            <img class="w-10 mr-2" src="{{asset('img/icons/masterplan.svg')}}" alt="">
            <h2 class=" text-center font-bold text-lg  my-4 uppercase" > Master Plan </h2>
        </div>
        
        <article class="mb-4 mx-8 shadow" x-data="{open : true }">
            <header class="bg-gray-200 boder border-gray-200 px-4 py-2 cursor-pointer" x-on:click="open= !open ">
                <h2 class="font-bold text-gray-700 text-lg mx-4" > General </h2>
            </header>

            <div class=" bg-white px-4 py-2"  x-show="open">
                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                    <li>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/general/general.pdf')}}" >
                                    General
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/general/general.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </article>

        <article class="mb-4 mx-8 shadow" x-data="{open : true }">
            <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click="open= !open ">
                <h2 class="font-bold text-gray-700 text-lg mx-4">Manglar</h2>
            </header>

            <div class=" bg-white px-4 py-2"  x-show="open">
                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                    <li>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/manglar/general.pdf')}}" >
                                    Manglar General
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/manglar/general.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/manglar/uno.pdf')}}" >
                                    Manglar I
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/manglar/uno.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/manglar/dos.pdf')}}" >
                                    Manglar II
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/manglar/dos.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/manglar/tres.pdf')}}" >
                                    Manglar Strip Center
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/manglar/tres.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        
                    </li>
                </ul>
            </div>
        </article>
        
        <article class="mb-4 mx-8 shadow" x-data="{open : true }">
            <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click="open= !open ">
                <h2 class="font-bold text-gray-700 text-lg mx-4"> Lago</h2>
            </header>
            <div class=" bg-white px-4 py-2"  x-show="open">
                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                    <li>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/lago/general.pdf')}}" >
                                    Lago General
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/lago/general.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/lago/uno.pdf')}}" >
                                    Lago I
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/lago/uno.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        
                         <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/lago/dos.pdf')}}" >
                                    Lago II
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/lago/dos.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </article>
        
        <article class="mb-4 mx-8 shadow" x-data="{open : true }">
            <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click="open= !open ">
                <h2 class="font-bold text-gray-700 text-lg mx-4"> Bosque</h2>
            </header>

            <div class=" bg-white px-4 py-2"  x-show="open">
                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                    <li>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/general.pdf')}}" >
                                    Bosque General
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/general.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/uno.pdf')}}" >
                                    Bosque I
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/uno.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/dos.pdf')}}" >
                                    Bosque II
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/dos.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/tres.pdf')}}" >
                                    Bosque III
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/tres.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/cuatro.pdf')}}" >
                                    Bosque IV
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/cuatro.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </article>
        <article class="mb-4 mx-8 shadow" x-data="{open : false }">
            <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click="open= !open ">
                <h2 class="font-bold text-gray-700 text-lg mx-4" > Selva</h2>
            </header>

            <div class=" bg-white px-4 py-2"  x-show="open">
                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                    <li>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/selva/general.pdf')}}" >
                                    Selva General
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/selva/general.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/selva/uno.pdf')}}" >
                                    Selva I
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/selva/uno.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/selva/dos.pdf')}}" >
                                    Selva II
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/selva/dos.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/selva/tres.pdf')}}" >
                                    Selva III
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/selva/tres.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/selva/cuatro.pdf')}}" >
                                    Selva IV
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/selva/cuatro.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </article>
        <article class="mb-4 mx-8 shadow" x-data="{open : false }">
            <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click="open= !open ">
                <h2 class="font-bold text-gray-700 text-lg mx-4" >Páramo</h2>
            </header>

            <div class=" bg-white px-4 py-2"  x-show="open">
                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                    <li>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/paramo/general.pdf')}}" >
                                    Páramo General
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/paramo/general.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/paramo/uno.pdf')}}" >
                                    Páramo I
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/paramo/uno.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/paramo/dos.pdf')}}" >
                                    Páramo II
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/paramo/dos.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/paramo/tres.pdf')}}" >
                                    Páramo III
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/paramo/tres.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        
                    </li>
                </ul>
            </div>
        </article>
        <article class="mb-4 mx-8 shadow" x-data="{open : false }">
            <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click="open= !open ">
                <h2 class="font-bold text-gray-700 text-lg mx-4" >Taiga</h2>
            </header>

            <div class=" bg-white px-4 py-2"  x-show="open">
                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                    <li>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/taiga/general.pdf')}}" >
                                    Taiga General
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/taiga/general.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/taiga/uno.pdf')}}" >
                                    Taiga I
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/taiga/uno.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/taiga/dos.pdf')}}" >
                                    Taiga II
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/taiga/dos.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/taiga/tres.pdf')}}" >
                                    Taiga III
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/taiga/tres.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        
                    </li>
                </ul>
            </div>
        </article>
        <article class="mb-4 mx-8 shadow" x-data="{open : false }">
            <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click="open= !open ">
                <h2 class="font-bold text-gray-700 text-lg mx-4" >Desierto</h2>
            </header>

            <div class=" bg-white px-4 py-2"  x-show="open">
                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                    <li>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/general.pdf')}}" >
                                    Desierto General
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/general.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/uno.pdf')}}" >
                                    Desierto I
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/uno.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/dos.pdf')}}" >
                                    Desierto II
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/dos.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/tres.pdf')}}" >
                                    Desierto III
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/tres.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/cuatro.pdf')}}" >
                                    Desierto IV
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/cuatro.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </article>
        <article class="mb-4 mx-8 shadow" x-data="{open : false }">
            <header class="boder border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click="open= !open ">
                <h2 class="font-bold text-gray-700 text-lg mx-4" >Estepa</h2>
            </header>

            <div class=" bg-white px-4 py-2"  x-show="open">
                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                    <li>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/estepa/general.pdf')}}" >
                                    Estepa General
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/estepa/general.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/estepa/uno.pdf')}}" >
                                    Estepa I
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/estepa/uno.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/estepa/dos.pdf')}}" >
                                    Estepa II
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/estepa/dos.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                <a href="{{asset('file/porttoblanco/cimatario/master_plan/estepa/tres.pdf')}}" >
                                    Estepa III
                                </a>
                            </div>
                            <div class="mr-4">
                                <a download href="{{asset('file/porttoblanco/cimatario/master_plan/estepa/tres.pdf')}}" href="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </article>


        {{-- <article class="mb-4 mx-10 shadow" x-data="{open : true }">
            
           
            
            <div class=" bg-red-50 px-4 py-2">
               
                <div class="py-3">
                    <h3 class="text-blue-900 font-semibold text-lg  mb-2 mt-2">Lago</h3>
                        <ul class="grid grid-cols-1 gap-2"> 
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/lago/general.pdf')}}" >
                                            Lago General
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/lago/uno.pdf')}}" >
                                            Lago I
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/lago/uno.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                            </li>
                        </ul>
                </div>
                <div class="py-3">
                    <h3 class="text-blue-900 font-semibold text-lg  mb-2 mt-2">Bosque</h3>
                        <ul class="grid grid-cols-1 gap-2"> 
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/general.pdf')}}" >
                                            Bosque General
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/general.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/uno.pdf')}}" >
                                            Bosque I
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/uno.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/dos.pdf')}}" >
                                            Bosque II
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/dos.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/tres.pdf')}}" >
                                            Bosque III
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/tres.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/cuatro.pdf')}}" >
                                            Bosque IV
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/bosque/cuatro.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                            </li>
                        </ul>
                </div>
                <div class="py-3">
                    <h3 class="text-blue-900 font-semibold text-lg  mb-2 mt-2">Selva</h3>
                        <ul class="grid grid-cols-1 gap-2"> 
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/selva/general.pdf')}}" >
                                            Selva General
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/selva/general.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/selva/uno.pdf')}}" >
                                            Selva I
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/selva/uno.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/selva/dos.pdf')}}" >
                                            Selva II
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/selva/dos.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/selva/tres.pdf')}}" >
                                            Selva III
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/selva/tres.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/selva/cuatro.pdf')}}" >
                                            Selva IV
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/selva/cuatro.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                            </li>
                        </ul>
                </div>
                <div class="py-3">
                    <h3 class="text-blue-900 font-semibold text-lg  mb-2 mt-2">Páramo</h3>
                        <ul class="grid grid-cols-1 gap-2"> 
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/paramo/general.pdf')}}" >
                                            Páramo General
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/paramo/general.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/paramo/uno.pdf')}}" >
                                            Páramo I
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/paramo/uno.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/paramo/dos.pdf')}}" >
                                            Páramo II
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/paramo/dos.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/paramo/tres.pdf')}}" >
                                            Páramo III
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/paramo/tres.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                            </li>
                        </ul>
                </div>
                <div class="py-3">
                    <h3 class="text-blue-900 font-semibold text-lg  mb-2 mt-2">Taiga</h3>
                        <ul class="grid grid-cols-1 gap-2"> 
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/taiga/general.pdf')}}" >
                                            Taiga General
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/taiga/general.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/taiga/uno.pdf')}}" >
                                            Taiga I
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/taiga/uno.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/taiga/dos.pdf')}}" >
                                            Taiga II
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/taiga/dos.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/taiga/tres.pdf')}}" >
                                            Taiga III
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/taiga/tres.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                            </li>
                        </ul>
                </div>
                <div class="py-3">
                    <h3 class="text-blue-900 font-semibold text-lg  mb-2 mt-2">Desierto</h3>
                        <ul class="grid grid-cols-1 gap-2"> 
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/general.pdf')}}" >
                                            Desierto General
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/general.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/uno.pdf')}}" >
                                            Desierto I
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/uno.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/dos.pdf')}}" >
                                            Desierto II
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/dos.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/tres.pdf')}}" >
                                            Desierto III
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/tres.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/cuatro.pdf')}}" >
                                            Desierto IV
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/desierto/cuatro.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                            </li>
                        </ul>
                </div>
                <div class="py-3">
                    <h3 class="text-blue-900 font-semibold text-lg  mb-2 mt-2">Estepa</h3>
                        <ul class="grid grid-cols-1 gap-2"> 
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/estepa/general.pdf')}}" >
                                            Estepa General
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/estepa/general.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/estepa/uno.pdf')}}" >
                                            Estepa I
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/estepa/uno.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/estepa/dos.pdf')}}" >
                                            Estepa II
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/estepa/dos.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/master_plan/estepa/tres.pdf')}}" >
                                            Estepa III
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a download href="{{asset('file/porttoblanco/cimatario/master_plan/estepa/tres.pdf')}}" href="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                            </li>
                        </ul>
                </div>

            </div>
        </article>
         --}}
    </section>
</x-app-layout>
