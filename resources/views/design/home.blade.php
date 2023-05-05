<x-app-layout>
    <div class="section">
        <div class="">
            <div class="mt-2 py-2 bg-basic-50" style="opacity: .3;">
                <h2 class=" text-center font-bold text-sm  tracking-widest uppercase">recursos de Diseño</h2>
            </div>
        </div>
        <div class="m-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2" id="profile-tab"
                        data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                        aria-selected="false">CCIMA</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">Habitta</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                        aria-selected="false">Navetec</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="sherpa-tab" data-tabs-target="#sherpa" type="button" role="tab" aria-controls="sherpa"
                        aria-selected="false">Sherpa</button>
                </li>
            </ul>
        </div>
        {{-- Conetenido para los archivos --}}
        <div id="myTabContent">
            <div class="hidden mx-4  rounded-lg " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="px-2 rounded-b-2xl" x-show="open">
                    <ul class="grid grid-cols-1 gap-2  mb-2">
                        <li class="text-gray-700 text-base">
                            {{-- GRUPOCCIMA --}}
                            <div id="accordion-collapse" data-accordion="collapse">
                                <h2 id="accordion-collapse-heading-1">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white"
                                        data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-1">
                                        <span>Logos</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-1" class=""
                                    aria-labelledby="accordion-collapse-heading-1">
                                    <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                        <ul class="grid grid-cols-1 gap-2">
                                            <li class="text-gray-700 text-base">
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/ccima/logos/fondo_blanco.svg')}}" download>
                                                            Fondo Blanco
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/ccima/logos/fondo_transparente.svg')}}" download>
                                                            Fondo Transparente
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/ccima/logos/formato_svg.svg')}}" download>
                                                            Formato SVG
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-2">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                        data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-2">
                                        <span>Videos</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-2" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-2">
                                    <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700">
                                        <ul class="grid grid-cols-1 gap-2">
                                            <li class="text-gray-700 text-base">
                                                <div class="flex justify-between mt-2">
                                                    <div class="ml-4">
                                                        <img class="mr-2" src="" alt="">
                                                        <a href="https://youtu.be/vxsGpGcScB0">
                                                            El bajio
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-3">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                        data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-3">
                                        <span>Tarjeta de Presentación</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-3" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-3">
                                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                                        <ul class="grid grid-cols-1 gap-2">
                                            <li class="text-gray-700 text-base">
                                                <div class="flex justify-between mt-2">
                                                    <div class="ml-4">
                                                        <img class="mr-2" src="" alt="">
                                                        <a href="{{asset('file/design/ccima/tarjetas/tarjetas_presentacion.zip')}}">
                                                            tarjetas de Presentación (zip)
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-4">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                        data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-4">
                                        <span>Manual de Identidad</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-4" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-4">
                                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                                        <ul class="grid grid-cols-1 gap-2">
                                            <li class="text-gray-700 text-base">
                                                <div class="flex justify-between mt-2">
                                                    <div class="ml-4">
                                                        <img class="mr-2" src="" alt="">
                                                        <a href="{{asset('file/design/ccima/manual/manual.zip')}}">
                                                            Manual de Indentidad (.zip)
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                    </div>
                                </div>
                            </div>
                            {{-- FIN DE GRUPOCCIMA --}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden mx-4  rounded-lg" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="px-2 rounded-b-2xl" x-show="open">
                    <ul class="grid grid-cols-1 gap-2 mb-2">
                        <li class="text-gray-700 text-base">
                            {{-- habitta --}}
                            <div id="accordion-collapse" data-accordion="collapse">
                                 {{-- Logos de Habitta --}}
                                <h2 id="accordion-collapse-heading-5">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white"
                                        data-accordion-target="#accordion-collapse-body-5" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-5">
                                        <span>Logos Habitta</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-5" class=""
                                    aria-labelledby="accordion-collapse-heading-5">
                                    <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                        <ul class="grid grid-cols-1 gap-2">
                                            <li class="text-gray-700 text-base">
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/porttoblanco/logos/habita/fondo_blanco.svg')}}" download>
                                                            Fondo Blanco
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/porttoblanco/logos/habita/fondo_transparente.svg')}}" download>
                                                            Fondo Transparente
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/porttoblanco/logos/habita/formato_svg.svg')}}" download>
                                                            Formato SVG
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                 {{-- Logos de Habitta --}}
                                 {{-- Logos de Cimatario --}}
                                <h2 id="accordion-collapse-heading-6">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                        data-accordion-target="#accordion-collapse-body-6" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-6">
                                        <span>Logos PB Cimatario</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-6" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-6">
                                    <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700">
                                        <ul class="grid grid-cols-1 gap-2">
                                            <li class="text-gray-700 text-base">
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/porttoblanco/logos/cimatario/fondo_blanco.svg')}}" download>
                                                            Fondo Blanco
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/porttoblanco/logos/cimatario/fondo_transparente.svg')}}" download>
                                                            Fondo Transparente
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/porttoblanco/logos/cimatario/formato_svg.svg')}}" download>
                                                            Formato SVG
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- Logos de Cimatario --}}
                                {{-- Logos de Lomas --}}
                                <h2 id="accordion-collapse-heading-7">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                        data-accordion-target="#accordion-collapse-body-7" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-7">
                                        <span>Logos de Lomas de PB</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-7" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-7">
                                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                                        <ul class="grid grid-cols-1 gap-2">
                                            <li class="text-gray-700 text-base">
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/porttoblanco/logos/lomas/fondo_blanco.svg')}}" download>
                                                            Fondo Blanco
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/porttoblanco/logos/lomas/fondo_transparente.svg')}}" download>
                                                            Fondo Transparente
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/porttoblanco/logos/lomas/formato_svg.svg')}}" download>
                                                            Formato SVG
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- Logos de Lomas --}}
                                {{-- Logos de Bernal --}}
                                <h2 id="accordion-collapse-heading-8">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                        data-accordion-target="#accordion-collapse-body-8" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-8">
                                        <span>Logos de PB Bernal</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-8" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-8">
                                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                                        <ul class="grid grid-cols-1 gap-2">
                                            <li class="text-gray-700 text-base">
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/porttoblanco/logos/bernal/fondo_blanco.svg')}}" download>
                                                            Fondo Blanco
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/porttoblanco/logos/bernal/fondo_transparente.svg')}}" download>
                                                            Fondo Transparente
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/porttoblanco/logos/bernal/formato_svg_colores.svg')}}" download>
                                                            Formato SVG
                                                        </a>
                                                    </div>
                                                </div>
                            
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/porttoblanco/logos/bernal/fondo_blanco_colores.svg')}}" download>
                                                            Fondo Blanco Colores
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/porttoblanco/logos/bernal/fondo_transparente_colores.svg')}}" download>
                                                            Fondo Transparente colores
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/porttoblanco/logos/bernal/formato_svg.svg')}}" download>
                                                            Formato SVG Colores
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- Logos Bernal  --}}
                                {{-- videos --}}
                                <h2 id="accordion-collapse-heading-9">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                        data-accordion-target="#accordion-collapse-body-9" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-9">
                                        <span>Videos</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-9" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-9">
                                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                                        <ul class="grid grid-cols-1 gap-2">
                                            <li class="text-gray-700 text-base">
                                                <div class="flex justify-between mt-2">
                                                    <div class="ml-4">
                                                        <img class="mr-2" src="" alt="">
                                                        <a href="https://youtu.be/KXh7_kT2C5M">
                                                            Portto Blanco Cimatario
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="ml-4">
                                                        <img class="mr-2" src="" alt="">
                                                        <a href="https://youtu.be/SPy1PgW4ZtQ">
                                                            Ubicacion Portto Blanco 
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="ml-4">
                                                        <img class="mr-2" src="" alt="">
                                                        <a href="https://youtu.be/SPy1PgW4ZtQ">
                                                            Lomas de Portto Blanco 
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- videos --}}
                                {{-- Manual de Identidad --}}
                                <h2 id="accordion-collapse-heading-10">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                        data-accordion-target="#accordion-collapse-body-10" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-10">
                                        <span>Manual de Identidad</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-10" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-10">
                                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                                        <ul class="grid grid-cols-1 gap-2">
                                            <li class="text-gray-700 text-base">
                                                <div class="flex justify-between mt-2">
                                                    <div class="ml-4">
                                                        <img class="mr-2" src="" alt="">
                                                        <a href="{{asset('file/design/porttolbanco/manual/manual.zip')}}">
                                                            Manual de Indentidad (.zip)
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- Manual de Identidad --}}
                            </div>
                            {{-- FIN DE HABITTA --}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden mx-4  rounded-lg" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <div class="px-2 rounded-b-2xl" x-show="open">
                    <ul class="grid grid-cols-1 gap-2  mb-2">
                        <li class="text-gray-700 text-base">
                            {{-- Navetec --}}
                            <div id="accordion-collapse" data-accordion="collapse">
                                <h2 id="accordion-collapse-heading-11">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white"
                                        data-accordion-target="#accordion-collapse-body-11" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-11">
                                        <span>Logos Navetec</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-11" class=""
                                    aria-labelledby="accordion-collapse-heading-11">
                                    <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                        <ul class="grid grid-cols-1 gap-2">
                                            <li class="text-gray-700 text-base">
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/navetec/logos/fondo_blanco.svg')}}" download>
                                                            Fondo Blanco
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/navetec/logos/fondo_transparente.svg')}}" download>
                                                            Fondo Transparente
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/navetec/logos/formato_svg.svg')}}" download>
                                                            Formato SVG
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-12">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                        data-accordion-target="#accordion-collapse-body-12" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-12">
                                        <span>Videos</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-12" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-12">
                                    <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700">
                                        <ul class="grid grid-cols-1 gap-2">
                                            <li class="text-gray-700 text-base">
                                                <div class="flex justify-between mt-2">
                                                    <div class="ml-4">
                                                        <img class="mr-2" src="" alt="">
                                                        <a href="https://youtu.be/5GN534Xu_A4">
                                                            Server ubicacion
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="ml-4">
                                                        <img class="mr-2" src="" alt="">
                                                        <a href="https://youtu.be/ZUyGMAisAf4">
                                                            Santa Rosa ubicacion
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="ml-4">
                                                        <img class="mr-2" src="" alt="">
                                                        <a href="https://youtu.be/nGF83AbPmGA">
                                                            Pedro Escobedo ubicacion
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="ml-4">
                                                        <img class="mr-2" src="" alt="">
                                                        <a href="https://youtu.be/0w18vVkNBkA">
                                                             Anuncio Feb-2022
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <h2 id="accordion-collapse-heading-13">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                        data-accordion-target="#accordion-collapse-body-13" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-13">
                                        <span>Manual de Identidad</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-13" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-13">
                                    <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                                        <ul class="grid grid-cols-1 gap-2">
                                            <li class="text-gray-700 text-base">
                                                <div class="flex justify-between mt-2">
                                                    <div class="ml-4">
                                                        <img class="mr-2" src="" alt="">
                                                        <a href="{{asset('file/design/navetec/manual/manual.zip')}}">
                                                            Manual de Identidad (.zip)
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- FIN DE Navetec --}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden mx-4  rounded-lg" id="sherpa" role="tabpanel" aria-labelledby="sherpa-tab">
                <div class="px-2 rounded-b-2xl" x-show="open">
                    <ul class="grid grid-cols-1 gap-2 mb-2">
                        <li class="text-gray-700 text-base">
                             {{-- Sherpa --}}
                             <div id="accordion-collapse" data-accordion="collapse">
                                <h2 id="accordion-collapse-heading-14">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium text-left border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white"
                                        data-accordion-target="#accordion-collapse-body-14" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-14">
                                        <span>Logos Sherpa</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-14" class=""
                                    aria-labelledby="accordion-collapse-heading-14">
                                    <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                        <ul class="grid grid-cols-1 gap-2">
                                            <li class="text-gray-700 text-base">
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/sherpa/logos/fondo_transparente.svg')}}" download>
                                                            Fondo Transparente
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    <div class="flex">
                                                        <img class="w-4 mr-2" src="{{asset('img/icons/img.svg')}}" alt="">
                                                        <a href="{{asset('file/design/sherpa/logos/formato_svg.svg')}}" download>
                                                            Formato SVG
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- videos Sherpa --}}
                                <h2 id="accordion-collapse-heading-15">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                                        data-accordion-target="#accordion-collapse-body-15" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-15">
                                        <span>Videos</span>
                                        <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-15" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-15">
                                    <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700">
                                        <ul class="grid grid-cols-1 gap-2">
                                            <li class="text-gray-700 text-base">
                                                <div class="flex justify-between mt-2">
                                                    <div class="ml-4">
                                                        <img class="mr-2" src="" alt="">
                                                        <a href="https://youtu.be/uTsV8So1JuE">
                                                            sherpa 
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- videos Sherpa --}}

                            </div>
                            {{-- FIN DE Sherpa --}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
