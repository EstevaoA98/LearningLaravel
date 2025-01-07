<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!--Styles Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Styles -->

    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="logo barbearia"></a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/barbershopServices/create">Atendimento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/barbershopProducts/products">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Criar conta</a>
                    </li>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer>
        <p>Barbeshop &copy; 2025</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>