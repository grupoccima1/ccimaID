@php
    $master = [
        ['name' => 'Area Comercial ', 'url' => asset('file/navetec/beta/masterplan/master_plan_area_comercial.pdf'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Locales ', 'url' => asset('file/navetec/beta/masterplan/master_plan_locales.pdf'),'img' => asset('img/icons/pdf.svg'),],
    ];
    $disponibilidad = [
        ['name' => 'Beta General', 'url' => 'https://grupoccima.com/#!/Navetec-Beta_Business_Park','img' => asset('img/icons/condo.svg'),],
    ]; 
    $simuladores = [
        ['name' => 'Simulador General', 'url' => asset('file/navetec/aeropuerto/simulador/NVT_simulador_Normal.xlsm'),'img' => asset('img/icons/pdf.svg'),'video'=>'https://youtu.be/0_cGL91E5rM'],
    ];
    $reglamentos = [
        ['name' => 'Reglamento General', 'url' => asset('file/navetec/beta/reglamentos/reglamento_general.pdf'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Reglamento interno', 'url' => asset('file/navetec/beta/reglamentos/reglamento_interno.pdf'),'img' => asset('img/icons/pdf.svg'),],
    ];
    $promociones = [
        ['name' => 'Promociones', 'url' => asset('file/navetec/aeropuerto/precio/promociones.pdf'),'img' => asset('img/icons/pdf.svg'),],
    ];
    $ubicacion = [
        ['name' => 'KMZ', 'url' => asset('file/navetec/beta/ubicacion/ubicacion.kmz'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Imagen Satelital', 'url' => asset('file/navetec/beta/ubicacion/imagen_satelital.jpg'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Asoleamiento', 'url' => asset('file/navetec/beta/ubicacion/asoleamiento.pdf'),'img' => asset('img/icons/pdf.svg'),],
    ];
    $presentacion = [
        ['name' => 'Asesores', 'url' => asset('file/navetec/aeropuerto/presentacion/asesores.pdf'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Clientes', 'url' => asset('file/navetec/aeropuerto/presentacion/clientes.pdf'),'img' => asset('img/icons/pdf.svg'),],
    ];
    $flyers = [
        ['name' => 'Digital','url' => asset('file/navetec/aeropuerto/flyer/DS_flyer_navetec_by_ccima.jpg'),'img' => asset('img/icons/pdf.svg'),],
    ];
    $fichas = [
        ['name' => 'Area Comercial','url' => asset('file/navetec/beta/fichas_tecnicas/area_comercial.pdf'), 'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Locales Comerciales','url' => asset('file/navetec/beta/fichas_tecnicas/locales_comerciales.pdf'), 'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Naves','url' => asset('file/navetec/beta/fichas_tecnicas/naves.pdf'), 'img' => asset('img/icons/pdf.svg'),],
    ];
      $videos = [
         ['name' => 'Beta', 'url' => "https://www.youtube.com/watch?v=Vv4T5sPowzU&feature=youtu.be",'img' => asset('img/icons/pdf.svg'),],
   
    ];

    $vrs = [
        ['name' => 'Recorridos Virtuales Navetec', 'url' => asset('file/navetec/beta/vr/recorridosvr.pdf') ,'img' => asset('img/icons/pdf.svg'),],
        
        ['name' => 'Navetec', 'url' => 'https://GrupoCCIMA.vr-360-tour.com/e/gcwBhO1bbTg/e','img' => asset('img/icons/pdf.svg'),],
       
    ];
@endphp


<x-app-layout>
    
    <section class=" max-w-7xl mx-auto ">
        <div class="">
            <div class="mt-2 py-2 bg-basic-50" style="opacity: .3;">
                <h2 class=" text-center font-bold text-sm  tracking-widest uppercase">beta</h2>
            </div>
        </div>

        <div class="m-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2" id="profile-tab"
                        data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                        aria-selected="false">
                        Informacion de Producto</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">Herramientas</button>
                </li>

            </ul>
        </div>
        {{-- Conetenido para los archivos --}}
        <div id="myTabContent">
            {{-- Informacion de Prodcuto --}}
            <div class="hidden mx-4  rounded-lg " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="px-2 rounded-b-2xl" x-show="open">
                    <ul class="grid grid-cols-1 gap-2  mb-2">
                        {{--Master Plan --}}
                        <article class="" x-data="{open : false}">
                            <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer flex" x-on:click="open= !open ">
                                <img class="w-6" src="{{ asset('img/icons/masterplan.svg')}}" alt="">
                                <h2 class="text-sm text-gray-700  p-2 uppercase">master plan</h2>
                            </header>
                            <div class="py-2 rounded-b-2xl shadow-md"  x-show="open">
                                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                                    @foreach ($master as $mas)
                                        <li class="flex text-gray-700 text-sm"> 
                                            <img class="mr-2 w-4" src="{{$mas['img']}}" alt="">
                                            <a href="{{$mas['url']}}">
                                                {{$mas['name']}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </article>
                        {{-- cotizador --}}
                        <article class="" x-data="{open : false}">
                            <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer flex" x-on:click="open= !open ">
                                <img class="w-6" src="{{ asset('img/icons/masterplan.svg')}}" alt="">
                                <h2 class="text-sm text-gray-700  p-2 uppercase">disponibilidad</h2>
                            </header>
                            <div class="py-2 rounded-b-2xl shadow-md"  x-show="open">
                                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                                    @foreach ($disponibilidad as $dis)
                                        <li class="flex text-gray-700 text-sm"> 
                                            <img class="mr-2 w-4" src="{{$dis['img']}}" alt="">
                                            <a href="{{$dis['url']}}">
                                                {{$dis['name']}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>                           
                        </article>
                        {{-- simulador--}}
                        <article class="" x-data="{open : false}">
                            <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer flex" x-on:click="open= !open ">
                                <img class="w-6" src="{{ asset('img/icons/simulador.svg')}}" alt="">
                                <h2 class="text-sm text-gray-700  p-2 uppercase">simulador</h2>
                            </header>
                            <div class="py-2 rounded-b-2xl shadow-md"  x-show="open">
                                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                                    @foreach ($simuladores as $sim)
                                        @if ($sim['name'] == 'Simulador General')
                                            <li class="flex text-gray-700 text-sm"> 
                                                <img class="mr-2 w-4" src="{{$sim['img']}}" alt="">
                                                <a href="{{$sim['url']}}">
                                                    {{$sim['name']}}
                                                </a>
                                                <a class="text-blue-500 ml-2" href="{{$sim['video']}}">
                                                    Ver Video
                                                </a>
                                            </li>
                                        @else
                                            <li class="flex text-gray-700 text-sm"> 
                                                <img class="mr-2 w-4" src="{{$sim['img']}}" alt="">
                                                <a href="{{$sim['url']}}">
                                                    {{$sim['name']}}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>                           
                        </article>
                        {{-- reglamentos --}}
                        <article class="" x-data="{open : false}">
                            <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer flex" x-on:click="open= !open ">
                                <img class="w-6" src="{{ asset('img/icons/reglamento.svg')}}" alt="">
                                <h2 class="text-sm text-gray-700  p-2 uppercase">reglamento</h2>
                            </header>
                            <div class="py-2 rounded-b-2xl shadow-md"  x-show="open">
                                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                                    @foreach ($reglamentos as $reg)
                                        <li class="flex text-gray-700 text-sm"> 
                                            <img class="mr-2 w-4" src="{{$reg['img']}}" alt="">
                                            <a href="{{$reg['url']}}">
                                                {{$reg['name']}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>                           
                        </article>
                        {{-- promociones --}}
                        <article class="" x-data="{open : false}">
                            <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer flex" x-on:click="open= !open ">
                                <img class="w-6" src="{{ asset('img/icons/precio.svg')}}" alt="">
                                <h2 class="text-sm text-gray-700  p-2 uppercase">promociones</h2>
                            </header>
                            <div class="py-2 rounded-b-2xl shadow-md"  x-show="open">
                                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                                    @foreach ($promociones as $promo)
                                        <li class="flex text-gray-700 text-sm"> 
                                            <img class="mr-2 w-4" src="{{$promo['img']}}" alt="">
                                            <a href="{{$promo['url']}}">
                                                {{$promo['name']}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>                           
                        </article>
                        {{-- ubicacion --}}
                        <article class="" x-data="{open : false}">
                            <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer flex" x-on:click="open= !open ">
                                <img class="w-6" src="{{ asset('img/icons/ubicacion.svg')}}" alt="">
                                <h2 class="text-sm text-gray-700  p-2 uppercase">ubicación</h2>
                            </header>
                            <div class="py-2 rounded-b-2xl shadow-md"  x-show="open">
                                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                                    @foreach ($ubicacion as $ubi)
                                        <li class="flex text-gray-700 text-sm"> 
                                            <img class="mr-2 w-4" src="{{$ubi['img']}}" alt="">
                                            <a href="{{$ubi['url']}}">
                                                {{$ubi['name']}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>                           
                        </article>
                    </ul>
                </div>
            </div>
            {{-- Herramiendas de ventas --}}
            <div class="hidden mx-4  rounded-lg" id="dashboard" role="tabpanel"
                aria-labelledby="dashboard-tab">
                <div class="px-2 rounded-b-2xl" x-show="open">
                    <ul class="grid grid-cols-1 gap-2 mb-2">
                        {{--PRESENTACIONES --}}
                        <article class="" x-data="{open : open}">
                            <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer flex" x-on:click="open= !open ">
                                <img class="w-8" src="{{ asset('img/icons/presentacion.svg')}}" alt="">
                                <h2 class="text-sm text-gray-700  p-2 uppercase">presentacion</h2>
                            </header>
                            
                            <div class="py-2 rounded-b-2xl shadow-md"  x-show="open">
                                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                                    @foreach ($presentacion as $pres)
                                        <li class="flex text-gray-700 text-sm"> 
                                            <img class="mr-2 w-4" src="{{$pres['img']}}" alt="">
                                            <a href="{{$pres['url']}}">
                                                {{$pres['name']}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </article>
                        {{-- FLYERS --}}
                        <article class="" x-data="{open : false}">
                            <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer flex" x-on:click="open= !open ">
                                <img class="w-8" src="{{ asset('img/icons/flyer.svg')}}" alt="">
                                <h2 class="text-sm text-gray-700  p-2 uppercase">FLYERS</h2>
                            </header>
                            <div class="py-2 rounded-b-2xl shadow-md"  x-show="open">
                                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                                    @foreach ($flyers as $fly)
                                        <li class="flex text-gray-700 text-sm"> 
                                            <img class="mr-2 w-4" src="{{$fly['img']}}" alt="">
                                            <a href="{{$fly['url']}}">
                                                {{$fly['name']}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </article>
                         {{-- recorridos VR--}}
                        <article class="" x-data="{open : false}">
                            <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer flex" x-on:click="open= !open ">
                                <img class="w-6" src="{{ asset('img/icons/fichatecnica.svg')}}" alt="">
                                <h2 class="text-sm text-gray-700  p-2 uppercase">Recorridos VR</h2>
                            </header>
                            <div class="py-2 rounded-b-2xl shadow-md"  x-show="open">
                                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                                    @foreach ($vrs as $vr)
                                        <li class="flex text-gray-700 text-sm"> 
                                            <img class="mr-2 w-4" src="{{$vr['img']}}" alt="">
                                            <a href="{{$vr['url']}}">
                                                {{$vr['name']}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>                           
                        </article>


                        {{-- FICHAS TECNICAS AMENIDADES--}}
                        <article class="" x-data="{open : false}">
                            <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer flex" x-on:click="open= !open ">
                                <img class="w-6" src="{{ asset('img/icons/fichatecnica.svg')}}" alt="">
                                <h2 class="text-sm text-gray-700  p-2 uppercase">fichas amenidades</h2>
                            </header>
                            <div class="py-2 rounded-b-2xl shadow-md"  x-show="open">
                                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                                    @foreach ($fichas as $ficha)
                                        <li class="flex text-gray-700 text-sm"> 
                                            <img class="mr-2 w-4" src="{{$ficha['img']}}" alt="">
                                            <a href="{{$ficha['url']}}">
                                                {{$ficha['name']}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>                           
                        </article>
                        
                        {{-- VIDEOS --}}
                         <article class="" x-data="{open : false}">
                            <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer flex" x-on:click="open= !open ">
                                <img class="w-6" src="{{ asset('img/icons/fichatecnica.svg')}}" alt="">
                                <h2 class="text-sm text-gray-700  p-2 uppercase">Videos</h2>
                            </header>
                            <div class="py-2 rounded-b-2xl shadow-md"  x-show="open">
                                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                                    @foreach ($videos as $video)
                                        <li class="flex text-gray-700 text-sm"> 
                                            <img class="mr-2 w-4" src="{{$video['img']}}" alt="">
                                            <a href="{{$video['url']}}">
                                                {{$video['name']}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>                           
                        </article>

                    </ul>
                </div>
            </div>
    
        </div>        
    </section>  
    
    
</x-app-layout>