@php
    $cim_links = [
        [
            'name' => 'Master Plan',
            'url' => route('porttoblanco_cimatario_masterplan'),
            'img' => asset('img/icons/masterplan.svg'),
        ],
        [
            'name' => 'Cotizador',
            'url' => route('porttoblanco_cimatario_cotizador'),
            'img' => asset('img/icons/masterplan.svg'),
        ],
        [
            'name' => 'Simulador',
            'url' => route('porttoblanco_cimatario_simulador'),
            'img' => asset('img/icons/simulador.svg'),
        ],
        [
            'name' => 'Precio y Promociones',
            'url' => route('porttoblanco_cimatario_precio'),
            'img' => asset('img/icons/promocion.svg'),
        ],
        [
            'name' => 'Reglamento',
            'url' => route('porttoblanco_cimatario_reglamento'),
            'img' => asset('img/icons/reglamento.svg'),
        ],
        [
            'name' => 'Ubicacion',
            'url' => route('porttoblanco_cimatario_ubicacion'),
            'img' => asset('img/icons/ubicacion.svg'),
        ],
    ];
    

    $lm_links = [
        [
            'name' => 'Master Plan',
            'url' => route('porttoblanco_lomas_masterplan'),
            'img' => asset('img/icons/masterplan.svg'),
        ],
        [
            'name' => 'Cotizador',
            'url' => route('porttoblanco_lomas_cotizador'),
            'img' => asset('img/icons/masterplan.svg'),
        ],
        [
            'name' => 'Simulador',
            'url' => route('porttoblanco_lomas_simulador'),
            'img' => asset('img/icons/simulador.svg'),
        ],
        [
            'name' => 'Precio y Promociones',
            'url' => route('porttoblanco_lomas_precio'),
            'img' => asset('img/icons/promocion.svg'),
        ],
        [
            'name' => 'Reglamento',
            'url' => route('porttoblanco_lomas_reglamento'),
            'img' => asset('img/icons/reglamento.svg'),
        ],
        [
            'name' => 'Ubicacion',
            'url' => route('porttoblanco_lomas_ubicacion'),
            'img' => asset('img/icons/ubicacion.svg'),
        ],
    ];
    $ber_links = [
        [
            'name' => 'Master Plan',
            'url' => route('porttoblanco_bernal_masterplan'),
            'img' => asset('img/icons/masterplan.svg'),
        ],
        [
            'name' => 'Cotizador',
            'url' => route('porttoblanco_bernal_cotizador'),
            'img' => asset('img/icons/masterplan.svg'),
        ],
        [
            'name' => 'Simulador',
            'url' => route('porttoblanco_bernal_simulador'),
            'img' => asset('img/icons/simulador.svg'),
        ],
        [
            'name' => 'Reglamento',
            'url' => route('porttoblanco_bernal_reglamento'),
            'img' => asset('img/icons/reglamento.svg'),
        ],
        
    ];
@endphp

<x-app-layout>
    
    <div id="drax" class="max-w-7xl mx-auto px-8 sm:px-6 lg:px-8 pt-8 pb-4">
        <div class="w-full group inline-block">
            <button class="w-full outline-none focus:outline-none border px-3 py-3 bg-basic rounded-md flex items-center">
              <span class="pr-1 text-white font-semibold flex-1 uppercase text-lg ">Información de Producto</span>
              <span>
                <svg
                  class="fill-current text-white h-4 w-4 transform group-hover:-rotate-180
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
    <div class="mb-8">
        <section class="mt-0 max-w-7xl mx-auto  mb-8">
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
                    <h2 class="font-bold text-lg text-gray-700 mx-4">Portto Blanco Bernal </h2>
                </header>
                <div class="px-4 py-2 rounded-b-2xl shadow-md"  style="background-color: #F3F3F3" x-show="open">
                    <ul class="grid grid-cols-1 gap-2 mx-6"> 
                        @foreach ($ber_links as $ber_link)
                            <li class="flex text-gray-700 text-lg my-2"> 
                                <img class="mr-2 w-8" src=" {{$ber_link['img']}}" alt="">
                                <a href="{{$ber_link['url']}}">
                                    {{$ber_link['name']}}
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
                        @foreach ($cim_links as $cim_link)
                            <li class="flex text-gray-700 text-lg my-2"> 
                                <img class="mr-2 w-8" src="{{$cim_link['img']}}" alt="">
                                <a href="{{$cim_link['url']}}">
                                    {{$cim_link['name']}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </article>
            
            <article class="mb-4 mx-8" x-data="{open : true }">
                <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer" x-on:click="open= !open ">
                    <h2 class="font-bold text-lg text-gray-700 mx-4" > Lomas de Portto Blanco</h2>
                </header>
    
                <div class="px-4 py-2 rounded-b-2xl shadow-md"  style="background-color: #F3F3F3" x-show="open">
                    <ul class="grid grid-cols-1 gap-2 mx-6"> 
                        @foreach ($lm_links as $lm_link)
                            <li class="flex text-gray-700 text-lg my-2"> 
                                <img class="mr-2 w-8" src=" {{$lm_link['img']}}" alt="">
                                <a href="{{$lm_link['url']}}">
                                    {{$lm_link['name']}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </article>
        </section>  
    </div>
    
</x-app-layout>