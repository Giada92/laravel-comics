<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        {{-- Header della pagina --}}
        @include('partials.header')
        {{-- /Header della pagina --}}

        {{-- Jumbotron --}}
        @include('partials.jumbotron')
        {{-- Jumbotron --}}

        {{-- Main della pagina --}}
        <main>
                {{-- Fumetti --}}
                    @yield('main-content')
                {{-- /Fumetti --}}
        </main>
        {{-- /Main della pagina --}}

        {{-- Footer --}}
        <footer>
            {{-- footer-top --}}
            @include('partials.shop')
            {{-- /footer-top --}}
        </footer>
        {{-- /Footer --}}
    </body>
</html>