<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Bowl')</title>

    {{-- Fonts / Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

    {{-- CSS GLOBAL --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/testimonials.css') }}">

    {{-- CSS ESPECÍFICO DA PÁGINA --}}
    @stack('styles')
</head>
<body>

    {{-- HEADER --}}
    @include('partials.header')

    {{-- CONTEÚDO PRINCIPAL --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER (opcional) --}}
    @includeIf('partials.footer')

    {{-- JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    {{-- JS ESPECÍFICO DA PÁGINA --}}
    @stack('scripts')

</body>
</html>
