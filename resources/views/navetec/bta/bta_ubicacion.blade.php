<x-app-layout>
    <section class="mt-3 max-w-7xl mx-auto ">
        <div class=" py-2 bg-basic-50" style="opacity: .3;">
            <h2 class=" text-center font-bold text-sm  tracking-widest " >BETA</h2>
        </div>
        <div class="flex justify-center	 py-4">
            <img class="w-10 mr-2" src="{{asset('img/icons/ubicacion.svg')}}" alt="">
            <h2 class=" text-center font-bold text-lg  my-4 uppercase">ubicación</h2>
        </div>
        <article class="mb-4 mx-10" x-data="{open : true }">
            <div class=" bg-white px-4 py-2">
                <div class="py-3">
                        <ul class="grid grid-cols-1 gap-2"> 
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="" >
                                        <a href="https://goo.gl/maps/bEMHd2c344WQJM5T9">
                                            Google Maps
                                        </a>
                                    </div>
                                    <div class="" style="display: ruby">
                                    </div>
                                </div>
                            </li>
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="" >
                                        KMZ
                                    </div>
                                    <div class="" style="display: ruby">
                                        <a style="padding-right:10px" href="{{asset('file/navetec/beta/ubicacion/ubicacion.kmz')}}" download="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                            </li>
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="" >
                                        <a href="{{asset('file/navetec/beta/ubicacion/asolamiento.pdf')}}">
                                            Asoleamiento
                                        </a>
                                    </div>
                                    <div class="" style="display: ruby">
                                        <a style="padding-right:10px" href="{{asset('file/navetec/beta/ubicacion/asolamiento.pdf')}}" download="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                            </li>
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="" >
                                        <a href="{{asset('file/navetec/beta/ubicacion/imagen_satelital.jpg')}}">
                                            Imagen Satelital
                                        </a>
                                    </div>
                                    <div class="" style="display: ruby">
                                        <a style="padding-right:10px" href="{{asset('file/navetec/beta/ubicacion/imagen_satelital.jpg')}}" download="">
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