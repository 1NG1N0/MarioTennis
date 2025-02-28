@extends('app')
@section('title', 'EGAP Torneios: Mario Power Tennis')

@section('content')
    <header class="bg-dark text-white text-center py-5" style="background: linear-gradient(to right, #077e1d70, #01ff5684);">
        <div class="container">
            <h1 class="fw-bold">EGAP Torneios 2025: Mario Power Tennis</h1>
            <p class="lead">Compita com os melhores jogadores e prove suas habilidades na quadra virtual!</p>
            @guest
            <a href="#inscricao" class="btn btn-light btn-lg fw-bold">Inscreva-se Agora</a>
            @endguest
        </div>
    </header>

    <main class="container mt-5 p-5">
        <!-- Sobre o Torneio -->
        <section class="text-center mb-5">
            <h2 class="fw-bold">Sobre o Torneio</h2>
            <p class="text-muted">O torneio de <strong>Mario Power Tennis</strong> é a competição definitiva para fãs de jogos de esportes e estratégia.
            Prepare-se para partidas acirradas, rivalidades intensas e uma premiação incrível!</p>
        </section>

        <!-- Cards de Informações -->
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card p-3 shadow-sm border-0">
                    <h4 class="fw-bold">🎮 Formato</h4>
                    <p>Chaveamento de duplas com eliminação simples.</p><br>
                    <p>O torneio contará com X jogadores e será em sistema de mata-a-mata, perdeu, JÁ ERA!!!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 shadow-sm border-0">
                    <h4 class="fw-bold">🏆 Premiação</h4>
                    <p>Se você for um integrante da dupla campeã você ganahara um incrivel premio: uma noite em um rodizio de Pizza COM TUDO PAGO!!!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 shadow-sm border-0">
                    <h4 class="fw-bold">📅 Data</h4>
                    <p>O torneio acontecerá dia 07/03, no laboratorio 71</p>
                </div>
            </div>
        </div>

        <!-- Galeria de Imagens -->
        <section class="mt-5">
            <h3 class="fw-bold text-center">Galeria</h3>
            <div id="carouselTorneio" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Ai.jpg" class="d-block w-100 rounded" alt="Tela de título Mario Tennis">
                    </div>
                    <div class="carousel-item">
                        <img src="FotoEpica.jpg" class="d-block w-100 rounded" alt="Mario vs Peach em Mario Tennis">
                    </div>
                    <div class="carousel-item">
                        <img src="MonoMao.jpg" class="d-block w-100 rounded" alt="Troféu de Bowser Jr.">
                    </div>
                    <div class="carousel-item">
                        <img src="Seu.jpg" class="d-block w-100 rounded" alt="Troféu de Bowser Jr.">
                    </div>
                    <div class="carousel-item">
                        <img src="TeVira.jpg" class="d-block w-100 rounded" alt="Troféu de Bowser Jr.">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselTorneio" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselTorneio" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </section>

        @guest
        <!-- Inscrição -->
        <section id="inscricao" class="text-center mt-5">
            <h3 class="fw-bold">Garanta sua vaga!</h3>
            <p>As inscrições são limitadas. Não perca tempo e participe!</p>

            <a href="#" class="btn btn-danger btn-lg fw-bold">Inscreva-se Agora</a>
            @endguest
        </section>
    </main>
@endsection
