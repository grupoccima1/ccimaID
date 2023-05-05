<x-app-layout>
    <section class="mt-2 max-w-7xl mx-auto ">
        <div class=" py-2 bg-basic-50" style="opacity: .3;">
            <h2 class=" text-center font-bold text-sm  tracking-widest " > PORTTO BLANCO CIMATARIO  </h2>
        </div>
        <div class="flex justify-center	 py-4">
            <img class="w-10 mr-2" src="{{asset('img/icons/fichatecnica.svg')}}" alt="">
            <h2 class=" text-center font-bold text-lg  my-4 uppercase" >fichas técnicas    </h2>

        </div>
        <article class="mb-4 mx-10 " x-data="{open : true }">
            <div class=" bg-white px-4 py-2">
                <div class="py-3">
                        <ul class="grid grid-cols-1 gap-2"> 
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="flex">
                                        <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/areaecologica.pdf')}}" >
                                            Area Ecologica
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/areaecologica.pdf')}}" download="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="flex">
                                        <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/casaclub.pdf')}}" >
                                            Casa Club
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/casaclub.pdf')}}" download>
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="flex">
                                        <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/clubhipico.pdf')}}" >
                                            Club Hípico
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/clubhipico.pdf')}}" download>
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="flex">
                                        <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/clubporttoblanco.pdf')}}" >
                                            Club Portto Blanco
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/clubporttoblanco.pdf')}}" download>
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="flex">
                                        <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/fitnesspark.pdf')}}" >
                                            Fitness Park
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/fitnesspark.pdf')}}" download>
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                
                                <div class="flex justify-between mt-2">
                                    <div class="flex">
                                        <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/kidspark.pdf')}}" >
                                            Kids Park
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/kidspark.pdf')}}" download>
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="flex">
                                        <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/petfriendlypark.pdf')}}" >
                                            Pet Friendly Park
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/petfriendlypark.pdf')}}" download>
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="flex">
                                        <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/plazanautica.pdf')}}" >
                                            Plaza Náutica
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/plazanautica.pdf')}}" download>
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="flex">
                                        <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/urbanizacion.pdf')}}" >
                                            Urbanización
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/urbanizacion.pdf')}}" download>
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="flex">
                                        <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/zenpark.pdf')}}" >
                                            Zen Park
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/fichas/zenpark.pdf')}}" download>
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