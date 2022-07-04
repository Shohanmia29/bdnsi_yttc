<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="antialiased">
<div class="flex min-h-screen flex-col">
    <div class="w-full py-16 text-center text-4xl">
        <div class="mx-auto w-full max-w-4xl text-center">{{ config('app.name') }}</div>
    </div>
    <div class="w-full bg-slate-500">
        <div class="mx-auto flex w-full max-w-4xl">
            <a href="/" class="cursor-pointer py-2 px-4 text-white hover:bg-slate-600">Home</a>
            <a href="{{ route('result') }}" class="cursor-pointer py-2 px-4 text-white hover:bg-slate-600">Result</a>
            <a href="{{ route('center-request.create') }}" class="cursor-pointer py-2 px-4 text-white hover:bg-slate-600">Center Request</a>
            <div class="flex-grow"></div>
            <a href="{{ route('login') }}" class="cursor-pointer py-2 px-4 text-white hover:bg-slate-600 self-end">Center Login</a>
        </div>
    </div>
    <div class="w-full flex-grow">
        {{ $slot }}
    </div>
    <div class="w-full mt-8">
        <div class="mx-auto w-full max-w-4xl py-2 text-center">Copyright 2022</div>
    </div>
    {{ $script ?? '' }}
</div>
</body>
</html>
