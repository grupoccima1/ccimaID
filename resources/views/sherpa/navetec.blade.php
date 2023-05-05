@php
$files = [
[
'file' => 'Navetec cuenta Scotiabank',
'url' => asset('file/documents/navetec/cuenta_SCOTIABANK.pdf'),
'type' => asset('img/icons/pdf.svg'),
],
[
'file' => 'Procedimiento de pago Celta',
'url' =>  asset('file/documents/navetec/procedimiento_de_pago_celta.pdf'),
'type' => asset('img/icons/pdf.svg'),
],
[
'file' => 'Apartados por Telegram',
'url' => asset('file/documents/navetec/Apartados_telegram.pdf'),
'type' => asset('img/icons/pdf.svg'),
],
[
'file' => 'Info Fiscal para Facturar Comisiones',
'url' => asset('file/documents/navetec/facturacion_comisionista.pdf'),
'type' => asset('img/icons/pdf.svg'),
],
[
'file' => 'Facturacion clientes',
'url' => asset('file/documents/navetec/facturacion_clientes.pdf'),
'type' => asset('img/icons/pdf.svg'),
],
[
'file' => 'Bonos a Referidos Procedimiento',
'url' => asset('file/documents/navetec/bonos_referidos.pdf'), 
'type' => asset('img/icons/pdf.svg'),
],
[
'file' => 'Cobro de Bonos y Comisiones Procedimiento ',
'url' => asset('file/documents/navetec/cobro_comisiones.pdf'), 
'type' => asset('img/icons/pdf.svg'),
],
[
'file' => 'Facturacion Comisionista',
'url' => asset('file/documents/navetec/formato_facturacion_comisionista.pdf'),
'type' => asset('img/icons/pdf.svg'),
],
[
'file' => 'Comisiones Extra Formato',
'url' => asset('file/documents/navetec/comisiones_extras.xlsx'),
'type' => asset('img/icons/excel.svg'),
],

[
'file' => 'Cobro Comisiones Formato',
'url' => asset('file/documents/navetec/formato_de_comisiones_nuevo.xlsm'), 
'type' => asset('img/icons/excel.svg'),
],
[
'file' => 'Formato de control de recibos',
'url' => asset('file/documents/navetec/control_recibos.xlsx'),
'type' => asset('img/icons/excel.svg'),
],
];
@endphp

<x-app-layout>
    <section>
        <div class="">
            <div class="mt-2 py-2 bg-basic-50" style="opacity: .3;">
                <h2 class=" text-center font-bold text-sm  tracking-widest uppercase" >Navetec</h2>
            </div>
            <div class="flex justify-center	 py-4">
                <img class="w-10 mr-2" src="{{asset('img/icons/politicas.svg')}}" alt="">
                <h2 class=" text-center font-bold text-lg  my-4 uppercase" >Políticas y procedimientos</h2>
            </div>
        </div>
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 py-6 grid grid-cols-2" style="display: inline-grid; padding: 0rem 2rem 1rem 2rem;"> 
            <a href="{{route('doc-habitta')}}" class="w-full bg-habi-btn  text-white font-bold rounded-l-lg">
                <img style="width: 7.5rem;"  class="my-4 block mx-auto py-2" src="{{asset('img/logos/pb_logo.svg')}}" alt="">
            </a>
            <a href="{{route('doc-navetec')}}" class="w-full bg-nvt-btn text-white  font-bold rounded-r-lg">
                <img style="width: 6rem" class="my-4 block mx-auto"  src="{{asset('img/logos/nvt_logo_gris.svg')}}" alt="">
            </a>
        </div>

    </section>

    <div class="">
        <section class="mt-4 max-w-7xl mx-auto ">
            <article class="mb-4 mx-8 " x-data="{open : true }">
                <header class="bg-basic-50 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer" x-on:click="open= !open ">
                    <h2 class="font-bold text-white text-sm mx-4 uppercase" >Navetec procedimientos</h2>
                </header>
                <div class="px-2 py-2 rounded-b-2xl shadow-md" style="background-color: #F3F3F3"  x-show="open">
                    <ul class="grid grid-cols-1 gap-2 mx-2 mb-2"> 
                        <li class="text-gray-700 text-base"> 
                            @foreach ($files as $file)
                                <div class="flex justify-between mt-2">
                                    <div class="flex" >
                                        <img class="w-4 mr-2" src="{{$file['type']}}" alt="">
                                        <a href="{{$file['url']}}" >
                                         {{ $file['file']}}
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
</x-app-layout>