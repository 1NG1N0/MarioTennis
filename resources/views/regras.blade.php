@extends('app')
@section('title', 'EGAP Torneios: Mario Power Tennis')

@section('content')
<header class="bg-dark text-white text-center py-5" style="background: linear-gradient(to right, #077e1d70, #01ff5684);">
    <div class="container">
        <h1>Bem-vindo ao Torneio de Mario Power Tennis!</h1>
        <p class="lead">Prepare-se para competir no torneio mais emocionante do evento EGAP!</p>
        @guest
            <a href="#" class="btn btn-light btn-lg">Inscreva-se Agora</a>
        @endguest
    </div>
</header>

<main class="container mt-5 text-center">
    <div class="card bg-light border p-4">
        <h2 class="text-center">📜 Regras do Jogo</h2>
        <p>O torneio será disputado no clássico <strong>Mario Power Tennis</strong>. Confira as regras:</p>
    </div>

    <div class="bg-secondary text-white p-4 mt-4 rounded">
        <h4>🔹 Escolha de Personagens</h4>
        <p>Cada jogador deve escolher <strong>dois personagens</strong>, um <strong>primário</strong> e um <strong>secundário</strong> para prevenção de partidas onde os jogadores usem o mesmo personagem.</p>
        <p>Cada personagem só pode ser escolhido até <strong>três vezes</strong> no torneio, caso seja escolhido, ele ficará indisponível para escolha.</p>
    </div>

    <div class="card bg-light border p-4 mt-4">
        <h4>🎾 Regras Gerais do Jogo</h4>
        <p>As partidas regulares do campeonato serão no formato <strong>melhor de três sets</strong>.</p>
        <p>O sistema de pontuação segue as regras tradicionais do tênis (15, 30, 40, game).</p>
        <p>Power Shots são permitidos.</p>
        <p>Os jogos regulares do torneio serão disputados em diversas arenas, com a final sendo a única partida já com arena selecionada, a Peach Dome.</p>
    </div>

    <div class="bg-secondary text-white p-4 mt-4 rounded">
        <h2 class="text-center">🏆 Regras do Torneio</h2>
        <h4>🔥 Formato da Competição</h4>
        <p>O torneio seguirá o sistema <strong>eliminatório simples</strong>. Quem perder está fora.</p>
    </div>

    <div class="card bg-light border p-4 mt-4">
        <h4>📌 Condições de Vitória</h4>
        <p>O jogador que vencer <strong>por dois sets de diferença</strong> o adversário avança no torneio.</p>
        <p>O jogo terá um total de 4 sets, caso tenha 2-2, o jogo irá para o TieBreak!</p>
        <p>O TieBreak é um set especial que durará até 7 pontos, mas só podendo ser vencido por 2 pontos de diferença.</p>
    </div>

    <div class="bg-secondary text-white p-4 mt-4 rounded">
        <h4>🚫 Penalizações</h4>
        <p>Uso de bugs ou glitches para vantagem resultará em <strong>eliminação imediata</strong>.</p>
        <p>Atitudes antidesportivas, como ofensas ou manipulação de resultados, podem levar à <strong>desclassificação</strong>.</p>
        <p>Gemer, rasgar as cadeiras utilizadas no torneio com o orifício anal e ficar pulando enquanto faz beicinho pode levar à <strong>desclassificação</strong>.</p>
    </div>

    <div class="card bg-light border p-4 mt-4">
        <h4>🎁 Premiação</h4>
        <p>A dupla campeã ganhará um <strong>rodízio de pizza com tudo pago</strong> pelos organizadores do EGAP! 🍕</p>
        <p>Todos os participantes receberão um <strong>certificado digital</strong> de participação. (não garantido)</p>

    </div>
    <br>
        <br>
        <br>

</main>
@endsection
