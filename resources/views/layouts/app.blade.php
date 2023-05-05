<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/icons/logo.ico')}}">
        <title>CCIMAID</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset ('js/app.js') }}" defer ></script>
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white mb-16">
            @livewire('navigation-dropdown')
            <div class="py-7"></div>
            <!-- Page Content -->
            <main>
                {{ $slot }}
            <!-- Menu de nagevegacion -->    
                <div class="flex fixed" style="z-index: 10; bottom:0; left: 0; right: 0;">
                    <div class="w-full">
                        <div class="py-2" style="background-color: #021D49;">
                            <div class="flex justify-around">
                                <div class=""><a href="javascript: history.go(-1)"><img class="w-6" src="{{asset('img/icons/left.svg')}}" alt=""></a></div>
                                <div class=""><a href="{{route('home')}}"><img class="w-6" src="{{asset('img/icons/home.svg')}}" alt=""></a></div>
                                <div class=""><a href="{{route('gccima')}}"><img class="w-6" src="{{asset('img/icons/folder.svg')}}" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts

    </body>
</html>
