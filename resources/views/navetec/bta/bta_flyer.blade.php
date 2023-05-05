<x-app-layout>
    <section class=" mt-3 max-w-7xl mx-auto ">
        <div class=" py-2 bg-basic-50" style="opacity: .3;">
            <h2 class=" text-center font-bold text-sm  tracking-widest " >BETA</h2>
        </div>
        <div class="flex justify-center	 py-4">
            <img class="w-10 mr-2" src="{{asset('img/icons/flyer.svg')}}" alt="">
            <h2 class=" text-center font-bold text-lg  my-4 uppercase" >Flyers</h2>
        </div>
        <article class="mb-4 mx-10 " x-data="{open : true }">
            <div class=" bg-white px-4 py-2 shadow">
                <div class="py-3">
                        <ul class="grid grid-cols-1 gap-2"> 
                            <li class="text-gray-700 text-base"> 

                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="{{asset('file/navetec/aeropuerto/flyers/DS_flyer_navetec_by_ccima.jpg')}}" >
                                            Digital
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/navetec/aeropuerto/flyers/DS_flyer_navetec_by_ccima.jpg')}}" download="">
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