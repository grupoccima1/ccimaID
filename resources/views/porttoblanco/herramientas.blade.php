@php
 
    // lista de componente de Herramiendas de Ventas
    $c_links = [
        [
            'name' => 'Presentación',
            'url' => route('porttoblanco_cimatario_presentacion'),
            'img' => asset('img/icons/presentacion.svg'),
        ],
        [
            'name' => 'Flyers',
            'url' => route('porttoblanco_cimatario_flyer'),
            'img' => asset('img/icons/flyer.svg'),
        ],
        [
            'name' => 'Fichas T. Amenidades',
            'url' => route('porttoblanco_cimatario_fichas'),
            'img' => asset('img/icons/fichatecnica.svg'),
        ],
        
       
    ];
    $l_links = [
        [
            'name' => 'Presentacion',
            'url' => route('porttoblanco_lomas_presentacion'),
            'img' => asset('img/icons/presentacion.svg'),
        ],
        [
            'name' => 'Flyers',
            'url' => route('porttoblanco_lomas_flyer'),
            'img' => asset('img/icons/flyer.svg'),
        ],
        [
            'name' => 'Fichas T. Amenidades',
            'url' => route('porttoblanco_cimatario_fichas'),
            'img' => asset('img/icons/fichatecnica.svg'),
        ],
       
    ];
    $b_links = [
        [
            'name' => 'Presentacion',
            'url' => route('porttoblanco_bernal_presentacion'),
            'img' => asset('img/icons/presentacion.svg'),
        ],
        [
            'name' => 'Flyers',
            'url' => route('porttoblanco_bernal_flyer'),
            'img' => asset('img/icons/flyer.svg'),
        ],
        [
            'name' => 'Fichas Condominios',
            'url' => route('porttoblanco_bernal_fichas'),
            'img' => asset('img/icons/fichatecnica.svg'),
        ],
        [
            'name' => 'Fichas Amenidades',
            'url' => route('porttoblanco_bernal_amenidades'),
            'img' => asset('img/icons/fichatecnica.svg'),
        ],
    ];
@endphp


<x-app-layout>
    
    <div id="drax" class="max-w-7xl mx-auto px-8 sm:px-6 lg:px-8 pt-8 pb-4">
        <div class="w-full group inline-block">
            <button class="w-full outline-none focus:outline-none border px-3 py-3 bg-basic rounded-md flex items-center">
              <span class="pr-1 text-white font-semibold flex-1 uppercase text-lg">Herramientas de Ventas </span>
              <span>
                <svg
                  class="fill-current h-4 w-4 transform group-hover:-rotate-180
                  transition duration-150 ease-in-out"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20">
                  <path
                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                  />
                </svg>
              </span>
            </button>
            <ul
              class="overflow-x-hidden bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute 
            transition duration-150 ease-in-out origin-top"
            >
              <li class="rounded-sm px-4 py-1 hover:bg-gray-100"><a href="{{route('porttoblanco-venta')}}">Herramientas de Ventas </a></li>
              <li class="rounded-sm px-4 py-1 hover:bg-gray-100"> <a href="{{route('porttoblanco')}}">Informacion de Producto</a></li>
            </ul>
          </div>
          
          <style>
            /* since nested groupes are not supported we have to use 
               regular css for the nested dropdowns 
            */
            li>ul                 { transform: translatex(100%) scale(0) }
            li:hover>ul           { transform: translatex(101%) scale(1) }
            li > button svg       { transform: rotate(-90deg) }
            li:hover > button svg { transform: rotate(-270deg) }
          
            /* Below styles fake what can be achieved with the tailwind config
               you need to add the group-hover variant to scale and define your custom
               min width style.
                 See https://codesandbox.io/s/tailwindcss-multilevel-dropdown-y91j7?file=/index.html
                 for implementation with config file
            */
            .group:hover .group-hover\:scale-100 { transform: scale(1) }
            .group:hover .group-hover\:-rotate-180 { transform: rotate(180deg) }
            .scale-0 { transform: scale(0) }
            .min-w-32 { min-width: 8rem }
          </style>
    </div>

    <div class="" style="">
        <section class=" max-w-7xl mx-auto ">
            <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 py-0 my-0 grid grid-cols-2" style="display: inline-grid; padding: 1rem 2rem 1rem 2rem;"> 
                <a href="{{route('porttoblanco')}}" class="w-full bg-hab-btn  text-white font-bold rounded-l-lg">
                    <img style="width: 7.5rem;"  class="my-4 block mx-auto py-2" src="{{asset('img/logos/pb_logo.svg')}}" alt="">
                </a>
                <a href="{{route('navetec')}}" class="w-full bg-nvti-btn text-white  font-bold rounded-r-lg">
                    <img style="width: 6rem" class="my-4 block mx-auto"  src="{{asset('img/logos/nvt_logo_gris.svg')}}" alt="">
                </a>
            </div>

            <article class="mb-4 mx-8" x-data="{open : true }">
                <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer" x-on:click="open= !open ">
                    <h2 class="font-bold text-lg text-gray-700 mx-4" > Portto Blanco Bernal </h2>
                </header>
                
                <div class="px-4 py-2 rounded-b-2xl shadow-md"  style="background-color: #F3F3F3"  x-show="open">
                    <ul class="grid grid-cols-1 gap-2 mx-6"> 
                        @foreach ($b_links as $b_link)
                            <li class="flex text-gray-700 text-lg my-2"> 
                                <img class="mr-2 w-8" src="{{$b_link['img']}}" alt="">
                                <a href="{{$b_link['url']}}">
                                    {{$b_link['name']}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </article>

            <article class="mb-4 mx-8" x-data="{open : true }">
                <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer" x-on:click="open= !open ">
                    <h2 class="font-bold text-lg text-gray-700 mx-4" > Portto Blanco Cimatario </h2>
                </header>
                
                <div class="px-4 py-2 rounded-b-2xl shadow-md"  style="background-color: #F3F3F3"  x-show="open">
                    <ul class="grid grid-cols-1 gap-2 mx-6"> 
                        @foreach ($c_links as $c_link)
                            <li class="flex text-gray-700 text-lg my-2"> 
                                <img class="mr-2 w-8" src="{{$c_link['img']}}" alt="">
                                <a href="{{$c_link['url']}}">
                                    {{$c_link['name']}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </article> 
            
            <article class="mb-4 mx-8" x-data="{open : true }">
                <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer"  x-on:click="open= !open ">
                    <h2 class="font-bold text-lg text-gray-700 mx-4" > Lomas de Portto Blanco </h2>
                </header>

                <div class="px-4 py-2 rounded-b-2xl shadow-md"  style="background-color: #F3F3F3"   x-show="open">
                    <ul class="grid grid-cols-1 gap-2 mx-6"> 
                        @foreach ($l_links as $l_link)
                            <li class="flex text-gray-700 text-lg my-2"> 
                                <img class="mr-2 w-8" src="{{$l_link['img']}}" alt="">
                                <a href="{{$l_link['url']}}">
                                    {{$l_link['name']}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </article>
            
        </section>  
    </div>
    
</x-app-layout>