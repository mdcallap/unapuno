<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    
        @livewire('web.navigation')
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <footer class="p-4 bg-gray-100 md:p-8 lg:p-10 dark:bg-gray-800">
            <div class="mx-auto max-w-screen-xl text-center">
                <a href="#" class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
                    <img src="{{asset('images/logo.png')}}" class="h-8" alt="Flowbite Logo" />

                    SUB UNIDAD DE SEGURIDAD Y SALUD EN EL TRABAJO - UNA PUNO    
                </a>
                
                <p class="my-6 text-gray-500 dark:text-gray-400">Todos los derechos reservados</p>
              
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024-2025 <a href="#" class="hover:underline">UNA PUNO</a>. OTI</span>
                
            </div>
          </footer>
    </div>

    

    @stack('modals')

    @livewireScripts
</body>

@stack('js') 

</html>
