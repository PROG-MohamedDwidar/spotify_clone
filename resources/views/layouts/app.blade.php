<!DOCTYPE html>
<html class="h-screen" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{$title}}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Scripts -->
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="{{asset('js/flowbite.js')}}" type="module" defer></script>
        <script src="{{ asset('js/scripts.js') }}" type="module" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />



        {{-- <script defer src="{{ asset('js/flowbite.js') }}"></script> --}}
        
    </head>
    
    <body class="font-sans antialiased max-h-full h-full ">
        <div class=" h-full bg-gray-100 flex flex-col" >
            <div style="display: inline-block;height:8.5%">
            @include('layouts.navigation')
            </div>
            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main class="inline-block " style="display: inline-block;height:91.5%;">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
