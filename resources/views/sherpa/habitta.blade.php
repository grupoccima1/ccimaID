@php
$ultimos = [
[
'file' => 'Apartados telegram',
'url' => asset('file/documents/habitta/apartados_telegram.pdf'),
'type' => asset('img/icons/pdf.svg'),
],
[
'file' => 'Numero de cuenta  de porttoblanco ',
'url' =>  asset('file/documents/habitta/procedimiento_de_pago_de_cliente_P.pdf'),
'type' => asset('img/icons/pdf.svg'),
],

[
'file' => 'Info fiscal para facturación de clientes ',
'url' => asset('file/documents/habitta/informacion_facturar_comisionistas.pdf'),
'type' => asset('img/icons/pdf.svg'),
],

[
'file' => 'Procedimiento de pagos de clientes ',
'url' => asset('file/documents/habitta/procedimiento_de_pago_de_cliente_P.pdf'), 
'type' => asset('img/icons/pdf.svg'),
],

[
'file' => 'Bonos a referidos procedimientos ',
'url' => asset('file/documents/habitta/bonos_referidos.pdf'), 
'type' => asset('img/icons/pdf.svg'),
],

[
'file' => 'Bonos a referidos formato ',
'url' => asset('file/documents/habitta/bono_referido_form.xlsx'), 
'type' => asset('img/icons/excel.svg'),
],

[
'file' => 'Cobro de bonos y comisiones Procedimiento',
'url' => asset('file/documents/habitta/formato_de_comisiones_nuevo.xlsm'),
'type' => asset('img/icons/excel.svg'),
],
[
'file' => 'Comisiones Extras formato ',
'url' => asset('file/documents/habitta/formato_comisiones_extra.xlsx'),
'type' => asset('img/icons/excel.svg'),
],
// [
// 'file' => 'Cobro Comisiones Formato',
// 'url' => asset('file/documents/habitta/solicitud_devolución.xlsx'),
// 'type' => 'excel',
// ],
[
'file' => 'Formato de control de recibos',
'url' => asset('file/documents/habitta/control_recibos_F.xlsx'),
'type' => asset('img/icons/excel.svg'),
],

];
@endphp

<x-app-layout>
    <section>
        <div class="">
            <div class="mt-2 py-2 bg-basic-50" style="opacity: .3;">
                <h2 class=" text-center font-bold text-sm  tracking-widest uppercase" >Hábitta</h2>
            </div>
            <div class="flex justify-center	 py-4">
                <img class="w-10 mr-2" src="{{asset('img/icons/politicas.svg')}}" alt="">
                <h2 class=" text-center font-bold text-lg  my-4 uppercase" >Políticas y procedimientos</h2>
            </div>
        </div>

        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 py-6 grid grid-cols-2" style="display: inline-grid; padding: 0rem 2rem 1rem 2rem;"> 
            <a href="{{route('doc-habitta')}}" class="w-full bg-hab-btn  text-white font-bold rounded-l-lg">
                <img style="width: 7.5rem;"  class="my-4 block mx-auto py-2" src="{{asset('img/logos/pb_logo.svg')}}" alt="">
            </a>
            <a href="{{route('doc-navetec')}}" class="w-full bg-nvti-btn text-white  font-bold rounded-r-lg">
                <img style="width: 6rem" class="my-4 block mx-auto"  src="{{asset('img/logos/nvt_logo_gris.svg')}}" alt="">
            </a>
        </div>
    </section>
    
    <div class="">
        <section class="mt-4 max-w-7xl mx-auto ">
            <article class="mb-4 mx-8 " x-data="{open : true }">
                <header class="bg-basic-50 rounded-t-lg boder border-gray-200 px-4 py-2 cursor-pointer" x-on:click="open= !open ">
                    <h2 class="font-bold text-white text-sm mx-4 uppercase" >Hábitta procedimientos</h2>
                </header>
                <div class="px-2 py-2 rounded-b-2xl shadow-md" style="background-color: #F3F3F3"  x-show="open">
                    <ul class="grid grid-cols-1 gap-2 mx-2 mb-2"> 
                        <li class="text-gray-700 text-base"> 
                            @foreach ($ultimos as $ultimo)
                                <div class="flex justify-between mt-2">
                                    <div class="flex" >
                                        <img class="w-4 mr-2" src="{{$ultimo['type']}}" alt="">
                                        <a href="{{$ultimo['url']}}" >
                                         {{ $ultimo['file']}}
                                        </a>
                                    </div>
                                    {{-- <div class="ml-auto">
                                        <a href="{{asset('file/ultimos/presentacion_Lomasasesores.pdf')}}" download="">
                                            <img class="h-4 " src="{{asset('img/icons/download.svg')}}" alt="">
                                        </a> 
                                    </div> --}}
                                </div>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </article>
        </section>  

    </div>
</x-app-layout>
