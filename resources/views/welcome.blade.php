<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Audiovisual.dev</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }

            a {
                color: blue;
                text-decoration: underline;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <div class="font-bold text-3xl">
                        Audiovisual.dev
                    </div>
                </div>
                <h2 class="font-bold mt-4 text-xl">Resources I want to work from in expanding this</h2>
                <ul class="list-disc pl-6">
                    <li>My <a href="https://mattstauffer.com/blog/setting-up-your-webcam-lights-and-audio-for-remote-work-podcasting-videos-and-streaming/">original article</a> obv</li>
                    <li>Everything from my buddy Michael Chan</li>
                    <li>https://twitter.com/EricaJoy/status/1336920432411209728</li>
                </ul>
                <h2 class="font-bold mt-4 text-xl">Brainstorm features</h2>
                <ul class="list-disc pl-6">
                    <li>Listings of all mics/webcams/etc. I've tested and my thoughts, ordered by price</li>
                    <li>"Get started doing ___" (podcasting, streaming, working from home) guides, each with "how much do you want to spend" type sliders/choosers</li>
                    <li>Audio samples</li>
                    <li>Video samples</li>
                </ul>
            </div>
        </div>
    </body>
</html>
