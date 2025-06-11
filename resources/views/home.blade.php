{{-- Utilizando componente como plantilla --}}

{{-- <x-app-layout>
    <div class="max-w-4xl mx-auto px-4">
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
</x-app-layout> --}}


{{-- Utilizando plantilla extendida --}}

@extends('layouts.app')

{{-- @section('title')
    Laravel 12
@endsection --}}

@section('title', 'Laravel')

@section('content')
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
@endsection

@push('css')
    <style>
        body {
            background-color: lightblue
        }
    </style>
@endpush

@push('css')
    <style>
        body {
            color: red
        }
    </style>
@endpush
