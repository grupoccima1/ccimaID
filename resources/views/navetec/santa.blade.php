@php
    
    $master = [
        ['name' => 'Master Plan General ', 'url' => asset('file/navetec/santa/masterplan/master_plan.pdf'),'img' => asset('img/icons/pdf.svg'),],
    ];
    
    $disponibilidad = [
        ['name' => 'Santa Rosa', 'url' => 'https://grupoccima.com/#!/Navetec-Santa_Rosa_Business_Park','img' => asset('img/icons/condo.svg'),],
    ]; 
    
$simuladores = [
        ['name' => 'Simulador Pago de Contado', 'url' => asset('file/navetec/santa/simulador/simulador_pago_contado.xlsx'),'img' => asset('img/icons/pdf.svg'),'video'=>'https://youtu.be/Qf1Lga0Ux0s'],
    ];
    $reglamentos = [
        ['name' => 'Reglamento General', 'url' => asset('file/navetec/santa/reglamentos/reglamento_general.pdf'),'img' => asset('img/icons/pdf.svg'),],
    ];
    
    $promociones = [
        ['name' => 'Promociones', 'url' => asset('file/navetec/aeropuerto/precio/promociones.pdf'),'img' => asset('img/icons/pdf.svg'),],
    ];
    
    $ubicacion = [
        ['name' => 'KMZ', 'url' => asset('file/navetec/santa/ubicacion/ubicacion.kmz'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Imagen Satelital', 'url' => asset('file/navetec/santa/ubicacion/imagen_satelital.jpg'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Asoleamiento', 'url' => asset('file/navetec/santa/ubicacion/asoleamiento.pdf'),'img' => asset('img/icons/pdf.svg'),],
    ];
    
    $presentacion = [
        ['name' => 'Presentación de Clientes', 'url' => asset('file/navetec/aeropuerto/presentacion/asesores.pdf'),'img' => asset('img/icons/pdf.svg'),],
    ];

    $flyers = [
        ['name' => 'Digital','url' => asset('file/navetec/aeropuerto/flyer/DS_flyer_navetec_by_ccima.jpg'),'img' => asset('img/icons/pdf.svg'),],
    ];
    
    $fichas = [
        ['name' => 'Santa Rosa','url' => asset('file/navetec/santa/fichas_tecnicas/ficha_tecnica_navetec.pdf'), 'img' => asset('img/icons/pdf.svg'),],
    ];
    $pago = [
        ['name' => 'procedimiento de pago','url' => asset('file/navetec/aeropuerto/pago/procedimiento_de_pago_nvt.pdf'), 'img' => asset('img/icons/pdf.svg'),],
    ];
     $videos = [
            ['name' => 'Santa Rosa', 'url' => "https://www.youtube.com/watch?v=HyokbjeTmfM",'img' => asset('img/icons/pdf.svg'),],
   
    ];

     $vrs = [
        ['name' => 'Recorridos Virtuales Navetec', 'url' => asset('file/navetec/santa/vr/recorridosvr.pdf') ,'img' => asset('img/icons/pdf.svg'),],
        
        ['name' => 'Navetec', 'url' => 'https://GrupoCCIMA.vr-360-tour.com/e/gcwBhO1bbTg/e','img' => asset('img/icons/pdf.svg'),],
       
    ];
    
@endphp

<x-app-layout>
    
    <section class=" max-w-7xl mx-auto ">
        <div class="">
            <div class="mt-2 py-2 bg-basic-50" style="opacity: .3;">
                <h2 class=" text-center font-bold text-sm  tracking-widest uppercase">santa rosa</h2>
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
                                        <li class="flex text-gray-700 text-sm"> 
                                            <img class="mr-2 w-4" src="{{$sim['img']}}" alt="">
                                            <a href="{{$sim['url']}}">
                                                {{$sim['name']}}
                                            </a>
                                        </li>
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
                              <article class="" x-data="{open : false}">
                            <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer flex" x-on:click="open= !open ">
                                <img class="w-6" src="{{ asset('img/icons/pago.svg')}}" alt="">
                                <h2 class="text-sm text-gray-700  p-2 uppercase">procedimiento de pago</h2>
                            </header>
                            <div class="py-2 rounded-b-2xl shadow-md"  x-show="open">
                                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                                    @foreach ($pago as $pay)
                                        <li class="flex text-gray-700 text-sm"> 
                                            <img class="mr-2 w-4" src="{{$pay['img']}}" alt="">
                                            <a href="{{$pay['url']}}">
                                                {{$pay['name']}}
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
                                    @foreach ($fichas as $fic)
                                        <li class="flex text-gray-700 text-sm"> 
                                            <img class="mr-2 w-4" src="{{$fic['img']}}" alt="">
                                            <a href="{{$fic['url']}}">
                                                {{$fic['name']}}
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