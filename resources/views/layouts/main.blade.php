<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-black antialiased">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 xl:max-w-5xl xl:px-0">
            <div class="flex h-screen flex-col justify-between">
                <header class="flex items-center justify-between py-10">
                    <x-header-logo />
                    <x-header-menu />
                </header>
                <main class="mb-auto">
                    {{ $slot }}
                </main>
                <footer>
                    <div class="mt-16 mb-4 flex flex-col items-center">
                        <x-footer-copyright />
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>