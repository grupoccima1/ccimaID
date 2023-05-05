<x-app-layout>
    <section class="mt-4 max-w-7xl mx-auto ">
        <article class="mb-4 mx-10 " x-data="{open : true }">
            <h2 class=" text-center font-bold text-sm  mb-4" >RECURSOS MARKETING </h2>  
            <div class=" bg-white px-4 py-2">
                <div class="py-3">
                        <ul class="grid grid-cols-1 gap-2"> 
                            <li class="text-gray-700 text-base"> 
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="" >
                                            BUYER PERSONA
                                        </a>
                                    </div>
                                    {{-- <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/precio/HAB_promociones_marzo.pdf')}}" download="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div> --}}
                                </div>
                                <div class="flex justify-between mt-2">
                                    <div class="ml-4">
                                        <img class="mr-2" src="" alt="">
                                        <a href="" >
                                            TUTORIALES
                                        </a>
                                    </div>
                                    {{-- <div class="mr-4">
                                        <a href="{{asset('file/porttoblanco/cimatario/precio/precio.pdf')}}" download>
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div> --}}
                                </div>

                            </li>
                        </ul>
                </div>
            </div>
        </article>
    </section>
</x-app-layout>