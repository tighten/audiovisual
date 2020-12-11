<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Audiovisual.dev</title>

        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <!--meta property="og:image" content="{{ url('/images/og.png') }}"-->
        <meta property="og:url" content="{{ url('/') }}">

        <link rel="icon" type="image/png" href="/images/favicon.png">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <x-nav />

        <main>
            {{ $slot }}
        </main>

        <script src="{{ asset('js/app.js') }}"></script>

        @stack('scripts')
    </body>
</html>
