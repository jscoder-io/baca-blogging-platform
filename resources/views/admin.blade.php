<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>Admin</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap">

        <!-- Scripts -->
        @routes
        @vite('resources/js/admin.js')
        @inertiaHead

        <style>body { font-family: 'Montserrat'; font-style: normal; font-weight: 400; }</style>
    </head>
    <body class="bg-gray-100">
        @inertia('admin')
    </body>
</html>
