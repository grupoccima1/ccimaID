<x-app-layout>
    <section class="mt-2 max-w-7xl mx-auto ">
        <div class=" py-2 bg-basic-50" style="opacity: .3;">
            <h2 class=" text-center font-bold text-sm  tracking-widest " > PORTTO BLANCO CIMATARIO  </h2>
        </div>
        <div class="flex justify-center	 py-4">
            <img class="w-10 mr-2" src="{{asset('img/icons/flyer.svg')}}" alt="">
            <h2 class=" text-center font-bold text-lg  my-4 uppercase" >flyers</h2>

        </div>
        <article class="mb-4 mx-10 " x-data="{open : true }">
            
            <div class=" bg-white px-4 py-2">
                <div class="">
                        <ul class="grid grid-cols-1 gap-2"> 
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="flex">
                                        <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/flyer/vertical.pdf')}}" >
                                            Vertical 2 caras
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/flyer/vertical.pdf')}}" download="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="flex">
                                        <img class="mr-2 w-4" src="{{asset('img/icons/pdf.svg')}}" alt="">
                                        <a href="{{asset('file/porttoblanco/cimatario/flyer/digital.jpg')}}" >
                                            Digital
                                        </a>
                                    </div>
                                    <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/flyer/digital.jpg')}}" download="">
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