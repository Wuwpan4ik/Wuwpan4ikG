<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Meta GPT</title>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div class="loginForm">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
