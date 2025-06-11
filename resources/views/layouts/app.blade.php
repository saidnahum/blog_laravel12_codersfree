<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'La wev')</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    {{-- Contenido variable / push --}}
    @stack('css')
</head>

<body>
    <header class="text-2xl font-bold">Header</header>
        @yield('content')
    <footer class="text-2xl font-bold">Footer</footer>
</body>
</html>

{{-- Yield vs stack
Yield se utiliza para definir una sola sección
Stack se utiliza para definir múltiples secciones que pueden ser apiladas
--}}

