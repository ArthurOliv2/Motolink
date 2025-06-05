<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Motolink')</title>
                
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

        <link href="{{ asset('css/home.css') }}" rel="stylesheet" >
        <link href="{{ asset('css/criar-conta.css') }}" rel="stylesheet" >
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-dark px-3 d-flex justify-content-between align-items-center">
        <span class="navbar-brand mb-0 h1">Motolink</span>
        <div class="d-flex gap-2">
            <a href="{{ route('cadastro') }}" class="btn btn-outline-green me-2">CRIAR CONTA</a>
            <a href="{{ route('login') }}" class="btn btn-green">LOGIN</a>
        </div>
    </nav>
    
    @yield('content')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

    @stack('scripts')
</body>
</html>