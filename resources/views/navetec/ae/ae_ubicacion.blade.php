<x-app-layout>
    <section class="mt-2 max-w-7xl mx-auto ">
        <div class=" py-2 bg-basic-50" style="opacity: .3;">
            <h2 class=" text-center font-bold text-sm  tracking-widest " >AEROPUERTO</h2>
        </div>
        <div class="flex justify-center	 py-4">
            <img class="w-10 mr-2" src="{{asset('img/icons/ubicacion.svg')}}" alt="">
            <h2 class=" text-center font-bold text-lg  my-4 uppercase" >ubicación </h2>
        </div>
        <article class="mb-4 mx-10" x-data="{open : true }">
            <div class=" bg-white px-4 py-2">
                <div class="py-3">
                        <ul class="grid grid-cols-1 gap-2"> 
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="flex" >
                                        <img class="mr-2 w-4" src="{{asset('img/icons/ubicacion.svg')}}" alt="">
                                        <a href="https://goo.gl/maps/3hfxf58dhcGzrfBd9">
                                            Google Maps
                                        </a>
                                    </div>
                                    <div class="" style="display: ruby">
                                    </div>
                                </div>
                            </li>
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="flex">
                                        <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                        KMZ
                                        
                                    </div>
                                    <div class="" style="display: ruby">
                                        <a style="padding-right:10px" href="{{asset('file/navetec/aeropuerto/ubicacion/ubicacion.kmz')}}" download="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                            </li>
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="flex" >
                                        <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                        <a href="{{asset('file/navetec/aeropuerto/ubicacion/asolamiento.pdf')}}">
                                            Asoleamiento
                                        </a>
                                    </div>
                                    <div class="" style="display: ruby">
                                        <a style="padding-right:10px" href="{{asset('file/navetec/aeropuerto/ubicacion/PROY-AE_asolamiento.pdf')}}" download="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                            </li>
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="flex">
                                        <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                        <a href="{{asset('file/navetec/aeropuerto/ubicacion/NVT-AE_imagen_satelital.jpg')}}">
                                            Imagen Satelital
                                        </a>
                                    </div>
                                    <div class="" style="display: ruby">
                                        <a style="padding-right:10px" href="{{asset('file/navetec/aeropuerto/ubicacion/NVT-AE_imagen_satelital.jpg')}}" download="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                            </li>
                        </ul>
                </div>
            </div>
        </article>

    </section>
</x-app-layout>