<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfólio</title>
    {{-- CSS --}}
    <link href="{{  asset('css/app.css') }}" rel="stylesheet">
    <link href="{{  asset('css/header.css') }}" rel="stylesheet">
    <link href="{{  asset('css/animacao.css') }}" rel="stylesheet">

    {{-- JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/funcoes.js') }}"></script>
    {{-- <script src="{{ asset('js/sitemix/swiper.js') }}"></script>  --}}
</head>
<body>
    @if (request()->routeIs('inicio'))
        @include('includes.header')
    @endif
    @yield('body')
</body>
</html>