<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-50 dark:bg-gray-900">
    {{-- top bar component --}}
    @include('layouts.topbar')

    {{-- Sidebar --}}
    @include('layouts.sidebar')

    {{-- Main section --}}
    <main class="p-4 md:ml-64 h-auto pt-20 min-h-screen">
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="mx-auto">

                {{-- page content --}}
                {{ $slot }}

            </div>
        </section>

    </main>

</body>

</html>
