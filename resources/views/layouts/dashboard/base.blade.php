<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('partials.fonts')
    @include('partials.tailwindstyles')
    {{-- @include('partials.bootstrapstyles') --}}
    @stack('style')

    <title>{{ $title }} | PKKMB Narotama 2023</title>
</head>

<body class="antialised font-poppins">
    @yield('base')

    @include('partials.scripts')

    @stack('script')

    
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>