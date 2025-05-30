<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="max-w-4xl mx-auto px-4">
        {{-- <h1>Bienvenido a la Página Principa</h1> --}}

        <x-alert type="danger" class="mb-4">
            <x-slot name="title">
                Título:
            </x-slot>

            Contenido de la alerta
        </x-alert>

        <x-alert2 type="warning" class="mb-4">
            <x-slot name="title">
                Título:
            </x-slot>

            Contenido de la alerta
        </x-alert2>

        <p>Hola mundo</p>
    </div>
</body>

</html>
