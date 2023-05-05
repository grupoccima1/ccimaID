<x-app-layout>
    <section class="mt-3 max-w-7xl mx-auto">
        <div class=" py-2 bg-basic-50" style="opacity: .3;">
            <h2 class=" text-center font-bold text-sm  tracking-widest " >BETA</h2>
        </div>
        <div class="flex justify-center	 py-4">
            <img class="w-10 mr-2" src="{{asset('img/icons/masterplan.svg')}}" alt="">
            <h2 class=" text-center font-bold text-lg  my-4 uppercase" >Fichas técnicas</h2>
        </div>
        
        <article class="mb-4 mx-10 " x-data="{open : true }">
            <div class="  px-4 py-2">
                <div class="py-3">
                        <ul class="grid grid-cols-1 gap-2"> 
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/navetec/beta/fichas_tecnicas/naves.pdf')}}" >
                                            Ficha General
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/navetec/beta/fichas_tecnicas/naves.pdf')}}" download>
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/navetec/beta/fichas_tecnicas/locales_comerciales.pdf')}}" >
                                            Ficha Locales
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/navetec/beta/fichas_tecnicas/locales_comerciales.pdf')}}" download>
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/navetec/beta/fichas_tecnicas/area_comercial.pdf')}}" >
                                            Ficha Comercial
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/navetec/beta/fichas_tecnicas/area_comercial.pdf')}}" download>
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