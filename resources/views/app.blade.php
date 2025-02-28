<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background: linear-gradient(to right, #077e1d70, #01ff5684);">
        <div class="container">
            <a class="navbar-brand" href="#">Mario Power Tennis</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.index') }}">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.login') }}">Inscrição</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Personagens</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Equipes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.regras') }}">Regras</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Como jogar</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer class="bg-dark text-white text-center py-3 mt-auto p-5" style="top: 10px">
    <p>&copy; 2025 EGAP - Encotro Geek do Agreste Potiguar. Todos os direitos devem ser respeitados.</p>
</footer>
</html>
