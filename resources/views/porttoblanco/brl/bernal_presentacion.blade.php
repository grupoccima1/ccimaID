<x-app-layout>
    <section class="mt-2 max-w-7xl mx-auto ">
        <div class=" py-2 bg-basic-50" style="opacity: .3;">
            <h2 class=" text-center font-bold text-sm  tracking-widest uppercase" >porttoblanco bernal</h2>
        </div>
        <div class="flex justify-center	 py-4">
            <img class="w-10 mr-2" src="{{asset('img/icons/presentacion.svg')}}" alt="">
            <h2 class=" text-center font-bold text-lg  my-4 uppercase" >Presentación </h2>

        </div>
            <article class="mb-4 mx-8 shadow" x-data="{open : true }">    
                <div class=" bg-white px-4 py-2"  x-show="open">
                    <ul class="grid grid-cols-1 gap-2 mx-6"> 
                        <li>
                            <div class="flex justify-between mt-2">
                                <div class="flex">
                                    <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                    <a href="{{asset('file/porttoblanco/bernal/presentacion/asesores.pdf')}}" >
                                        Presentación Bernal
                                    </a>
                                </div>
                                <div class="mr-4">
                                    <a href="{{asset('file/porttoblanco/bernal/presentacion/asesores.pdf')}}" download="">
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