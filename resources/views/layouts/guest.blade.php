<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            /* Gradien latar belakang */
            body {
                background: linear-gradient(135deg, #000, #555, #ddd);
                font-family: 'Figtree', sans-serif;
                color: #fff;
                margin: 0;
                padding: 0;
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .min-h-screen {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 1.5rem;
                min-height: 100vh;
            }

            .bg-custom {
                background: rgba(0, 0, 0, 0.8); /* Transparan gelap */
                border-radius: 12px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
                width: 100%;
                max-width: 400px;
                padding: 2rem;
                color: #fff;
            }

            .shadow-md {
                box-shadow: 0 8px 16px rgba(255, 255, 255, 0.1);
            }

            a {
                color: #aaa;
                text-decoration: none;
                font-size: 0.9rem;
            }

            a:hover {
                color: #fff;
                text-decoration: underline;
            }

            .rounded-lg {
                border-radius: 12px;
            }
        </style>
    </head>
    <body>
        <div class="min-h-screen flex flex-col sm:justify-center items-center">
            <!-- Hapus logo Laravel -->
            <div></div> 

            <!-- Form Container -->
            <div class="bg-custom shadow-md rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
