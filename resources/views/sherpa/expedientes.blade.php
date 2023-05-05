@php
    $files = [
    [
    'file' => 'Escrito de Falta de RFC GRUPOCCIMA ',
    'url' => asset('file/documents/expedientes/rfc_grupoccima.docx'),
    'type' => 'img/icons/pdf.svg',
    ],
    [
    'file' => 'Escrito de Falta de RFC NAVES Y TERRENOS ',
    'url' => asset('file/documents/expedientes/rfc_navesyterrenos.docx'),
    'type' => 'img/icons/pdf.svg',
    ],
    [
    'file' => 'Documentacion Requerida para Expedientes',
    'url' => asset('file/documents/expedientes/documentacion_expedientes.pdf'),
    'type' => 'img/icons/pdf.svg',
    ],
    [
    'file' => 'Video de Persona Fisica ',
    'url' => 'https://youtu.be/QON0SYznzUo',
    'type' => 'img/icons/youtube.svg',
    ],
    [
    'file' => 'Video de Copropiedad ',
    'url' => 'https://youtu.be/SrGdE3m5UEw',
    'type' => 'img/icons/youtube.svg',
    ],
    [
    'file' => 'Video Persona Fisica Casada',
    'url' => 'https://youtu.be/xLCO78_sNMY',
    'type' => 'img/icons/youtube.svg',
    ],
    [
    'file' => 'Documento de Persona Fisica ',
    'url' => asset('file/documents/expedientes/persona_fisica.pdf'),
    'type' => 'img/icons/pdf.svg',
    ],
    [
    'file' => 'Video de Persona Moral',
    'url' => 'https://youtu.be/gDvm-kQpLa8',
    'type' => 'img/icons/youtube.svg',
    ],
    [
    'file' => 'Documento de Persona Moral',
    'url' => asset('file/documents/expedientes/persona_moral.pdf'),
    'type' => 'img/icons/pdf.svg',
    ],
    [
    'file' => 'Video Formato de Registro',
    'url' => 'https://youtu.be/-QJCFx96_Cg',
    'type' => 'img/icons/youtube.svg',
    ],
    [
    'file' => 'Video Como Guardar un correo ',
    'url' =>  'https://youtu.be/kZiG5xDC6pI',
    'type' => 'img/icons/youtube.svg',
    ],

    [
    'file' => 'Video Revision de Contrato',
    'url' =>  'https://youtu.be/Vbavn5FqWgU',
    'type' => 'img/icons/youtube.svg',
    ],
    [
    'file' => 'Video Comprimir una Carpeta a Formato Zip',
    'url' => 'https://youtu.be/qe3ah6JH118',
    'type' => 'img/icons/youtube.svg',
    ],
    [
    'file' => 'Video Comprobante de Domicilio  de CEA ',
    'url' =>  'https://youtu.be/cP-7WIBUpUQ',
    'type' => 'img/icons/youtube.svg',
    ],
    [
    'file' => 'Sitio Web del CEA ',
    'url' => 'https://appcea.ceaqueretaro.gob.mx/PagoEnLinea/',
    'type' => 'img/icons/pdf.svg',
    ],
    [
    'file' => 'Video Descarga Comprobante CFE Actualiado ',
    'url' => 'https://youtu.be/cP-7WIBUpUQ',
    'type' => 'img/icons/youtube.svg',
    ],
    [
    'file' => 'Descarga app Android ',
    'url' =>  'https://play.google.com/store/apps/details?id=mx.com.cfe.cfecontigo&gl=US&pli=1',
    'type' => 'img/icons/link.svg',
    ],
    [
    'file' => 'Descarga app IOS ',
    'url' => 'https://apps.apple.com/us/app/cfe-contigo/id1354232135',
    'type' => 'img/icons/link.svg',
    ],
    [
    'file' => 'Video escanear INE Correctamente ',
    'url' => 'https://youtu.be/Fm1a8u0Iq6g',
    'type' => 'img/icons/youtube.svg',
    ],
    [
    'file' => 'Video Validar INE',
    'url' => 'https://youtu.be/LcnVf5yAe0I',
    'type' => 'img/icons/youtube.svg',
    ],
    
    [
    'file' => 'Validar INE ',
    'url' => 'https://listanominal.ine.mx/scpln/resultado.html',
    'type' => 'img/icons/link.svg',
    ],
    [
    'file' => 'Video Descargar CURP actualizada',
    'url' => 'https://youtu.be/kHBe535Pqo0',
    'type' => 'img/icons/youtube.svg',
    ],
    [
    'file' => 'Link Descarga Curp ',
    'url' => 'https://www.gob.mx/curp/',
    'type' => 'img/icons/link.svg',
    ],
    [
    'file' => 'Video Validar RFC',
    'url' =>  'https://youtu.be/ksca8mdflVg',
    'type' => 'img/icons/pdf.svg',
    ],
];

@endphp

<x-app-layout>
    <div class="section">
        <div class="">
            <div class="mt-2 py-2 bg-basic-50" style="opacity: .3;">
                <h2 class=" text-center font-bold text-sm  tracking-widest uppercase">Recursos de Expediente de Clientes</h2>
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
