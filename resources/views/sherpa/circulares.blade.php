@php
    $files = [
    [
    'file' => 'Circular Lanzamiento de Sur 57',
    'url' => asset('file/documents/circulares/lanzamiento_sur_57.pdf'),
    'type' => 'img/icons/pdf.svg',
    ],
    [
    'file' => 'Circular Locales Comerciales Calamanda',
    'url' => asset('file/documents/circulares/Circular_Locales_Comerciales_Calamanda.pdf'),
    'type' => 'img/icons/pdf.svg',
    ],
    [
    'file' => 'Devoluciones de cliente',
    'url' => asset('file/documents/circulares/circular1.pdf'),
    'type' => 'img/icons/pdf.svg',
    ],
    
    [
    'file' => 'Integracion de Expendientes',
    'url' => asset('file/documents/circulares/circular2.pdf'),
    'type' => 'img/icons/pdf.svg',
    ],
    [
    'file' => 'Aumento de Precios',
    'url' => asset('file/documents/circulares/circular3.pdf'),
    'type' => 'img/icons/pdf.svg',
    ],
    
    [
    'file' => 'Circular Informativa ',
    'url' => asset('file/documents/circulares/circular5.pdf'),
    'type' => 'img/icons/pdf.svg',
    ],
    [
    'file' => 'Info para Facturacion de Comi de LPB ',
    'url' => asset('file/documents/circulares/circular6.pdf'),
    'type' => 'img/icons/pdf.svg',
    ],
    [
    'file' => 'Facturacion de Comisionistas',
    'url' => asset('file/documents/circulares/circular7.pdf'),
    'type' => 'img/icons/pdf.svg',
    ],
    [
    'file' => 'Aviso de Pedro Escobedo',
    'url' => asset('file/documents/circulares/circular8.pdf'),
    'type' => 'img/icons/pdf.svg',
    ],
    [
    'file' => 'Circular para Facturacion ',
    'url' => asset('file/documents/circulares/circular9.pdf'),
    'type' => 'img/icons/pdf.svg',
    ],
    
];

@endphp

<x-app-layout>
    <div class="section">
        <div class="">
            <div class="mt-2 py-2 bg-basic-50" style="opacity: .3;">
                <h2 class=" text-center font-bold text-sm  tracking-widest uppercase">circulares</h2>
            </div>
        </div>
        <div class="mx-4 mt-10">
            <ul class="grid grid-cols-1 gap-2 mx-4 mb-2">
                <li class="text-gray-700 text-base">
                    @foreach($files as $file)
                        <div class="flex justify-between my-3">
                            <div class="flex">
                                <img class="w-4 mr-2" src="{{ $file['type'] }}" alt="">
                                <a href="{{ $file['url'] }}">
                                    {{ $file['file'] }}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </li>
            </ul>
        </div>

    </div>
</x-app-layout>
