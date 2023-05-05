<x-app-layout>

    <section class="mt-2 max-w-7xl mx-auto ">
        <div class=" py-2 bg-basic-50" style="opacity: .3;">
            <h2 class=" text-center font-bold text-sm  tracking-widest " >LOMAS DE PORTTO BLANCO</h2>
        </div>
        <div class="flex justify-center	 py-4">
            <img class="w-10 mr-2" src="{{asset('img/icons/ubicacion.svg')}}" alt="">
            <h2 class=" text-center font-bold text-lg  my-4 uppercase">Ubicación</h2>

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
                                <img class="mr-2 w-4" src="{{asset('img/icons/ubicacion.svg')}}" alt="">
                                <a href="" >
                                    Maps
                                </a>
                            </div>
                        </div>
                        <div class="flex justify-between mt-2">
                            <div class="flex">
                                 <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                    KMZ
                            </div>
                            <div class="mr-4">
                                <a href="{{asset('file/porttoblanco/lomas/ubicacion/kmz_lomas.kmz')}}" download="">
                                    <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                </a> 
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </article>
    </section>
    {{-- <section class="mt-4 max-w-7xl mx-auto ">
        <article class="mb-4 mx-10 " x-data="{open : true }">
            
            <h2 class=" text-center font-bold text-sm  mb-4" > PORTTO BLANCO CIMATARIO  </h2>
            <h2 class=" text-center font-bold text-lg  mb-4" >Ubicacion</h2>
            
            <div class=" bg-white px-4 py-2">
                <div class="py-3">
                        <ul class="grid grid-cols-1 gap-2"> 
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/precio/HAB_promociones_marzo.pdf')}}" >
                                            KMZ
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/precio/HAB_promociones_marzo.pdf')}}" download="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/precio/precio.pdf')}}" >
                                            Maps
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/precio/precio.pdf')}}" download>
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/precio/precio.pdf')}}" >
                                            Imagen Satelital
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/precio/precio.pdf')}}" download>
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/precio/precio.pdf')}}" >
                                            Asoleamiento
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/precio/precio.pdf')}}" download>
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>

                            </li>
                        </ul>
                </div>

            </div>
        </article>
    </section> --}}
</x-app-layout>