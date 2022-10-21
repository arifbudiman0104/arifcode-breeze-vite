<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>Dashboard</title>
    {{-- icon --}}
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png">

    <!-- Fonts Inter-->
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-slate-800">
        @include('layouts.navigationapp')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white dark:bg-slate-900 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main class="
        font-sans text-gray-900 antialiased">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
