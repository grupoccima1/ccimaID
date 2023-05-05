@php
$ultimos = [
  ['file' => 'Flyer Bernal','url' => asset('file/porttoblanco/bernal/flyer/flyer_bernal.pdf'),'icon' => asset('img/icons/pdf.svg'),],
    [
'file' => 'HAB Promociones Buen Fin ',
'url' => asset('file/porttoblanco/cimatario/precio/promociones_buenfin.pdf'),
'icon' => asset('img/icons/pdf.svg'),
],
    [
'file' => 'Devoluciones Circular ',
'url' => asset('file/documents/circulares/circular_devoluciones.pdf'),
'icon' => asset('img/icons/pdf.svg'),
],
    [
'file' => 'NVT Calamanda ',
'url' => 'https://grupoccima.com/#!/Navetec-Calamanda_Business_Park',
'icon' => asset('img/icons/condo.svg'),
],
[
'file' => 'HAB Circular uso de TPV',
'url' => asset('file/documents/habitta/circular_TPV.pdf'),
'icon' => asset('img/icons/pdf.svg'),
],
[
'file' => 'Amenidades Bernal',
'url' => route('porttoblanco_bernal_amenidades'),
'icon' => asset('img/icons/condo.svg'),
],
[
'file' => 'HAB Lineamientos Plan Constructor ',
'url' => asset('file/documents/habitta/linamientos_plan_constructor.pdf'),
'icon' => asset('img/icons/pdf.svg'),
],
[
'file' => 'CIM Reglamento Administrativo ',
'url' => asset('file/documents/habitta/lineamientos_pre_lanzamiento_bernal.pdf'),
'icon' => asset('img/icons/pdf.svg'),
],
];
$favo = [
[
'file' => 'HAB Procedimiento de Pago Lomas',
'url' => asset('file/documents/habitta/Procedimiento_de_pago_LPB.pdf'),
'icon' => asset('img/icons/pdf.svg'),
],
[
'file' => 'HAB Procedimiento de Pago Bernal',
'url' => asset('file/documents/habitta/procedimiento_de_pago_PBB.pdf'),
'icon' => asset('img/icons/pdf.svg'),
],
[
'file' => 'HAB Procedimiento de Pago Cimatario',
'url' => asset('file/documents/habitta/procedimiento_de_pago_de_cliente_P.pdf'),
'icon' => asset('img/icons/pdf.svg'),
],

[
'file' => 'Manglar 1',
'url' => 'https://grupoccima.com/#!/Portto_Blanco-Manglar_1',
'icon' => asset('img/icons/condo.svg'),
],

[
'file' => 'Zafiro 1',
'url' => 'https://grupoccima.com/#!/Portto_Blanco-Bernal/Zafiro_1',
'icon' => asset('img/icons/condo.svg'),
],
[
'file' => 'HAB Presentacion CIM_LOM',
'url' => asset('file/porttoblanco/lomas/cim-lomas-cliente.pdf.pdf'),
'icon' => asset('img/icons/pdf.svg'),
],
[
'file' => 'HAB Facturacion Cliente',
'url' => asset('file/documents/habitta/facturacion.pdf'),
'icon' => asset('img/icons/pdf.svg'),
],
[
'file' => 'NVT Info Fiscal para Facturar Comisiones',
'url' => asset('file/documents/navetec/facturacion_comisionista.pdf'),
'icon' => asset('img/icons/pdf.svg'),
],

];
@endphp


<x-app-layout>
    <section class=" max-w-7xl mx-auto ">
        <div class="mt-8">
            <section class="mt-4 max-w-7xl mx-auto ">
                <article class="mb-4 mx-8 " x-data="{open : false }">
                    <header class="bg-basic-50 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer" x-on:click="open= !open ">
                        <h2 class="font-bold text-white text-lg mx-4" >ULTIMOS ARCHIVOS </h2>
                    </header>
                    <div class="px-2 py-2 rounded-b-2xl shadow-md" style="background-color: #F3F3F3"  x-show="open">
                        <ul class="grid grid-cols-1 gap-2 mx-2 mb-2"> 
                            <li class="text-gray-700 text-base"> 
                                @foreach ($ultimos as $ultimo)
                                    <div class="flex justify-between mt-2">
                                        <div class="flex" >
                                            <img class="w-4 mr-2" src="{{$ultimo['icon']}}" alt="">
                                            <a href="{{$ultimo['url']}}" >
                                             {{ $ultimo['file']}}
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </article>
            </section>  
        </div>
    
        <div class="">
            <section class="mt-4 max-w-7xl mx-auto ">
                <article class="mb-4 mx-8 " x-data="{open : false }">
                    <header class="bg-basic-50 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer" x-on:click="open= !open ">
                        <h2 class="font-bold text-white text-lg mx-4" >FAVORITOS </h2>
                    </header>
                    <div class="px-2 py-2 rounded-b-2xl shadow-md" style="background-color: #F3F3F3"  x-show="open">
                        <ul class="grid grid-cols-1 gap-2 mx-2 mb-2"> 
                            <li class="text-gray-700 text-base"> 
                                @foreach ($favo as $f)
                                    <div class="flex justify-between mt-2">
                                        <div class="flex" >
                                            <img class="w-4 mr-2" src="{{$f['icon']}}" alt="">
                                            <a href="{{$f['url']}}" >
                                             {{ $f['file']}}
                                            </a>
                                        </div>
                                        
                                    </div>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </article>
            </section>  
        </div>
        {{-- DESARROLLOS HABITTA --}}
        <div class="">
            <section class="mt-8 max-w-7xl mx-8">
                <div class="grid grid-cols-3 gap-4 text-center">
                    <div class="" id="">
                        <a href="{{(route('cimatario'))}}">
                            <img class="w-12 mx-auto my-0" src="{{asset('img/icons/icon_porttoblanco.svg')}}" alt="">
                            <p class="uppercase pt-2">cimatario</p>
                        </a>
                    </div>
                    <div class="tex" id="">
                        <a href="{{(route('lomasporttoblanco'))}}">
                            <img class="w-12 mx-auto my-0" src="{{asset('img/icons/icon_porttoblanco.svg')}}" alt="">
                            <p class="uppercase pt-2">Lomas</p>
                        </a>
                    </div>
                    <div class="" id="">
                        <a href="{{(route('bernal'))}}">
                            <img class="w-12 mx-auto my-0" src="{{asset('img/icons/icon_porttoblanco.svg')}}" alt="">
                            <p class="uppercase pt-2">bernal</p>
                        </a>
                    </div>
                  </div>
            </section>
        </div>
        {{-- DESARROLLOS NAVETEC --}}
        <div class="">
            <section class="mt-8 max-w-7xl mx-8">
                <div class="grid grid-cols-3 gap-4 text-center">
                    <div class="" id="">
                        <a href="{{(route('aeropuerto'))}}">
                            <img class="w-12 mx-auto my-0" src="{{asset('img/icons/icon_navetec.svg')}}" alt="">
                                <p class="uppercase text-sm	 pt-2">aeropuerto</p>
                        </a>
                    </div>
                    <div class="tex" id="">
                        <a href="{{(route('beta'))}}">
                            <img class="w-12 mx-auto my-0" src="{{asset('img/icons/icon_navetec.svg')}}" alt="">
                                <p class="uppercase text-sm	 pt-2">beta</p>
                        </a>
                    </div>
                    <div class="" id="">
                        <a href="{{(route('calamanda'))}}">
                            <img class="w-12 mx-auto my-0" src="{{asset('img/icons/icon_navetec.svg')}}" alt="">
                            <p class="uppercase text-sm	 pt-2">calamanda</p>
                        </a>
                    </div>
                    <div class="" id="">
                        <a href="{{(route('celta'))}}">
                            <img class="w-12 mx-auto my-0" src="{{asset('img/icons/icon_navetec.svg')}}" alt="">
                            <p class="uppercase text-sm	 pt-2">celta</p>
                        </a>
                    </div>
                    <div class="tex" id="">
                        <a href="{{(route('gamma'))}}">
                            <img class="w-12 mx-auto my-0" src="{{asset('img/icons/icon_navetec.svg')}}" alt="">
                            <p class="uppercase text-sm	 pt-2">gamma</p>
                        </a>
                    </div>
                    <div class="" id="">
                        <a href="{{(route('gammaii'))}}">
                            <img class="w-12 mx-auto my-0" src="{{asset('img/icons/icon_navetec.svg')}}" alt="">
                            <p class="uppercase text-sm	 pt-2">gamma ii</p>
                        </a>
                    </div>
                    <div class="" id="">
                        <a href="{{(route('escobedo'))}}">
                            <img class="w-12 mx-auto my-0" src="{{asset('img/icons/icon_navetec.svg')}}" alt="">
                                <p class="uppercase text-sm	 pt-2">p escobedo</p>
                        </a>
                    </div>
                    <div class="tex" id="">
                        <a href="{{(route('santa'))}}">
                            <img class="w-12 mx-auto my-0" src="{{asset('img/icons/icon_navetec.svg')}}" alt="">
                                <p class="uppercase text-sm	 pt-2">santa rosa</p>
                        </a>
                    </div>
                    <div class="tex" id="">
                        <a href="{{(route('sur'))}}">
                            <img class="w-12 mx-auto my-0" src="{{asset('img/icons/icon_navetec.svg')}}" alt="">
                                <p class="uppercase text-sm	 pt-2">Sur 57</p>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </section>  
</x-app-layout>
