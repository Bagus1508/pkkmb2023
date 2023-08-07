<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('partials.fonts')
        @include('partials.tailwindstyles')
        @stack('style')
    
        <title>{{ $title }} | PKKMB Narotama 2023</title>
    </head>
    <body class="antialiased font-poppins">
        @include('layouts.landing.navbar')
        
        @yield('content')

        
        @include('layouts.landing.footer')
        <script>
            document.querySelector('#nav-toggle').onclick = () => {
                document.querySelectorAll('#nav-content').forEach(element => {
                    if (element.style.display === '') element.style.display = 'flex'
                    else element.style.display = ''
                })
            }
        </script>
        @stack('javascript')
        @include('partials.scripts')
    </body>
</html>
