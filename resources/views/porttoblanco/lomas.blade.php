@php
    $master = [
        ['name' => 'General', 'url' => asset('file/porttoblanco/lomas/masterplan/general.pdf'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Lomas 1 ', 'url' => asset('file/porttoblanco/lomas/masterplan/uno.pdf'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Lomas 2', 'url' => asset('file/porttoblanco/lomas/masterplan/dos.pdf'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Lomas 3', 'url' => asset('file/porttoblanco/lomas/masterplan/tres.pdf'),'img' => asset('img/icons/pdf.svg'),],
    ];
    $disponibilidad = [
        ['name' => 'Lomas 1', 'url' => 'https://grupoccima.com/#!/Portto_Blanco-Lomas_1','img' => asset('img/icons/condo.svg'),],
        ['name' => 'Lomas 2', 'url' => 'https://grupoccima.com/#!/Portto_Blanco-Lomas_2','img' => asset('img/icons/condo.svg'),],
        ['name' => 'Lomas 3', 'url' => 'https://grupoccima.com/#!/Portto_Blanco-Lomas_3','img' => asset('img/icons/condo.svg'),],
    ]; 
    $simuladores = [
        ['name' => 'General', 'url' => asset('file/porttoblanco/cimatario/simulador/general.xlsx'),'img' => asset('img/icons/excel.svg'), 'video'=>'https://youtu.be/Qf1Lga0Ux0s'],
        ['name' => 'Plan Sherpa', 'url' => asset('file/porttoblanco/cimatario/simulador/plan_sherpa.xlsx'),'img' => asset('img/icons/excel.svg'),],
    ];
    $reglamentos = [
        ['name' => 'Mantenimiento', 'url' => asset('file/porttoblanco/lomas/reglamento/mantenimiento.pdf'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Administracion', 'url' => asset('file/porttoblanco/lomas/reglamento/administracion.pdf'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Construccion', 'url' => asset('file/porttoblanco/lomas/reglamento/construccion.pdf'),'img' => asset('img/icons/pdf.svg'),],
    ];
    $promociones = [
        ['name' => 'Promociones', 'url' => asset('file/porttoblanco/cimatario/precio/promociones.pdf'),'img' => asset('img/icons/pdf.svg'),],
    ];
    $ubicacion = [
        ['name' => 'KMZ', 'url' => asset('file/porttoblanco/lomas/ubicacion/kmz_lomas.kmz'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Asoleamiento', 'url' => asset('file/porttoblanco/lomas/ubicacion/asoleamiento.pdf'),'img' => asset('img/icons/pdf.svg'),],
    ];
    $presentacion = [
        ['name' => 'Presentacion de Asesores', 'url' => asset('file/porttoblanco/cimatario/presentacion/asesor.pdf'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Presentacion de Clientes', 'url' => asset('file/porttoblanco/cimatario/presentacion/cliente.pdf'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Lomas Cimatario Asesores', 'url' => asset('file/porttoblanco/cimatario/presentacion/lomas_cimatario_asesores.pdf'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Lomas Cimatario Clientes', 'url' => asset('file/porttoblanco/cimatario/presentacion/lomas_cimatario_cliente.pdf'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Lomas Cimatario CDMX', 'url' => asset('file/porttoblanco/cimatario/presentacion/lomas_cimatario_cdmx.pdf'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Brochure General', 'url' => asset('file/porttoblanco/cimatario/presentacion/Brochure_general.pdf'),'img' => asset('img/icons/pdf.svg'),],
    ];
    $flyers = [
        ['name' => 'Vertical Caras','url' => asset('file/porttoblanco/cimatario/flyer/vertical.pdf'),'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Digital','url' => asset('file/porttoblanco/cimatario/flyer/digital.jpg'),'img' => asset('img/icons/pdf.svg'),],
    ];

    $amenidades = [
        ['name' => 'Area Ecologica','url' => asset('file/porttoblanco/cimatario/fichas/areaecologica.pdf'), 'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Casa Club','url' => asset('file/porttoblanco/cimatario/fichas/casaclub.pdf'), 'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Club Hipico','url' => asset('file/porttoblanco/cimatario/fichas/clubhipico.pdf'), 'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Club PorttoBlanco','url' => asset('file/porttoblanco/cimatario/fichas/clubporttoblanco.pdf'), 'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Fitness Park','url' => asset('file/porttoblanco/cimatario/fichas/fitnesspark.pdf'), 'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'kids Park','url' => asset('file/porttoblanco/cimatario/fichas/kidspark.pdf'), 'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Pet Friendly Park','url' => asset('file/porttoblanco/cimatario/fichas/petfriendlypark.pdf'), 'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Plaza Nautica','url' => asset('file/porttoblanco/cimatario/fichas/plazanautica.pdf'), 'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Urbanización','url' => asset('file/porttoblanco/cimatario/fichas/urbanizacion.pdf'), 'img' => asset('img/icons/pdf.svg'),],
        ['name' => 'Zen Park','url' => asset('file/porttoblanco/cimatario/fichas/zenpark.pdf'), 'img' => asset('img/icons/pdf.svg'),],
    ];
    $pago = [
        ['name' => 'Procedimiento de Pago', 'url' => asset('file/documents/habitta/Procedimiento_de_pago_LPB.pdf'),'img' => asset('img/icons/pdf.svg'),],
    ];
    $renders = [
        ['name' => 'Render de Lomas de Porto Blanco', 'url' => asset('file/porttoblanco/lomas/renders/renderLPB.zip'),'img' => asset('img/icons/pdf.svg'),],
    ];
@endphp
<x-app-layout>
    
    <section class=" max-w-7xl mx-auto ">
        <div class="">
            <div class="mt-2 py-2 bg-basic-50" style="opacity: .3;">
                <h2 class=" text-center font-bold text-sm  tracking-widest uppercase"> lomas de porttoblanco</h2>
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
                                        @if ($sim['name'] == 'General')
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
                        {{-- ubicacion --}}
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

                        {{-- FICHAS TECNICAS AMENIDADES--}}
                        <article class="" x-data="{open : false}">
                            <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer flex" x-on:click="open= !open ">
                                <img class="w-6" src="{{ asset('img/icons/fichatecnica.svg')}}" alt="">
                                <h2 class="text-sm text-gray-700  p-2 uppercase">fichas amenidades</h2>
                            </header>
                            <div class="py-2 rounded-b-2xl shadow-md"  x-show="open">
                                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                                    @foreach ($amenidades as $ame)
                                        <li class="flex text-gray-700 text-sm"> 
                                            <img class="mr-2 w-4" src="{{$ame['img']}}" alt="">
                                            <a href="{{$ame['url']}}">
                                                {{$ame['name']}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>                           
                        </article>
                        
                        {{-- renders--}}
                        <article class="" x-data="{open : false}">
                            <header class="bg-gray-200 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer flex" x-on:click="open= !open ">
                                <img class="w-6" src="{{ asset('img/icons/fichatecnica.svg')}}" alt="">
                                <h2 class="text-sm text-gray-700  p-2 uppercase">renders</h2>
                            </header>
                            <div class="py-2 rounded-b-2xl shadow-md"  x-show="open">
                                <ul class="grid grid-cols-1 gap-2 mx-6"> 
                                    @foreach ($renders as $render)
                                        <li class="flex text-gray-700 text-sm"> 
                                            <img class="mr-2 w-4" src="{{$render['img']}}" alt="">
                                            <a href="{{$render['url']}}">
                                                {{$render['name']}}
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