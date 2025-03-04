<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class siteSeeder extends Seeder
{
    public function run()
    {
        $personagens = [
            [
                'imagem' => 'MarioMPT.png',
                'nome' => 'Mario',
                'descricao' => 'Mario é o jogador mais equilibrado da quadra, combinando força, velocidade e precisão. Seu estilo versátil permite jogar tanto na defesa quanto no ataque sem grandes fraquezas. Seus Power Shots são bem fortes, garantindo um ótimo retorno sem comprometer o controle da bola.',
                'stats' => "Força: 6 <br> Velocidade: 6 <br> Controlabilidade: 7 <br> Power Shots (Força): 6 <br> Alcance: 6 <br>",
                'status' => 'all-around',
            ],
            [
                'imagem' => 'Luigi_MPT.png',
                'nome' => 'Luigi',
                'descricao' => 'Assim como Mario, Luigi é um jogador versátil, mas com um pouco mais de alcance devido à sua altura. Ele se destaca em trocas de bola longas, aproveitando sua movimentação fluida para cobrir a quadra com eficiência. Seus Power Shots têm bom controle e são ótimos para virar pontos.',
                'stats' => "Força: 6 <br> Velocidade: 6 <br> Controlabilidade: 8 <br> Power Shots (Força): 6 <br> Alcance: 7 <br>",
                'status' => 'all-around',
            ],
            [
                'imagem' => 'Peach_MPT.png',
                'nome' => 'Peach',
                'descricao' => 'Peach brilha no controle da bola, sendo uma mestre dos efeitos e da precisão. Suas jogadas são difíceis de prever, com slices traiçoeiros que forçam os adversários a errar. No entanto, ela não tem tanta força nos golpes, dependendo de estratégia e posicionamento para vencer.',
                'stats' => "Força: 4 <br> Velocidade: 5 <br> Controlabilidade: 9 <br> Power Shots (Força): 5 <br> Alcance: 6 <br>",
                'status' => 'technique',
            ],
            [
                'imagem' => 'Daisy_MPT.png',
                'nome' => 'Daisy',
                'descricao' => 'Daisy joga de forma parecida com Peach, mas com um pouco mais de agressividade e alcance. Seus golpes angulados e sua precisão fazem dela uma ameaça constante para quem tenta controlar o ritmo da partida. Seu Power Shot pode facilmente tirar adversários da posição ideal.',
                'stats' => "Força: 5 <br> Velocidade: 6 <br> Controlabilidade: 8 <br> Power Shots (Força): 6 <br> Alcance: 6 <br>",
                'status' => 'technique',
            ],
            [
                'imagem' => 'Yoshi_MPT.png',
                'nome' => 'Yoshi',
                'descricao' => 'Yoshi é incrivelmente rápido, cobrindo a quadra com facilidade e alcançando bolas impossíveis. Seu diferencial está na mobilidade, permitindo que ele chegue a bolas difíceis sem perder potência nos golpes. Ele pode ter dificuldades contra adversários mais fortes, mas sua velocidade compensa.',
                'stats' => "Força: 5 <br> Velocidade: 9 <br> Controlabilidade: 7 <br> Power Shots (Força): 5 <br> Alcance: 7 <br>",
                'status' => 'speed',
            ],
            [
                'imagem' => 'WarioMPT.png',
                'nome' => 'Wario',
                'descricao' => '.Wario é um jogador de pura força, capaz de esmagar a bola com golpes potentes que deixam os adversários sem reação. Sua movimentação não é das melhores, mas quando ele encontra o tempo certo para atacar, seus tiros são praticamente imparáveis.',
                'stats' => "Força: 9 <br> Velocidade: 4 <br> Controlabilidade: 5 <br> Power Shots (Força): 9 <br> Alcance: 6 <br>",
                'status' => 'power',
            ],
            [
                'imagem' => 'WaluigiMPT.png',
                'nome' => 'Waluigi',
                'descricao' => 'Com seus braços e pernas longos, Waluigi tem um dos melhores alcances do jogo, tornando-se um pesadelo para quem tenta finalizá-lo. Ele bloqueia ataques com facilidade e é excelente em ralis longos, frustrando adversários que tentam superá-lo no cansaço.',
                'stats' => "Força: 6 <br> Velocidade: 5 <br> Controlabilidade: 6 <br> Power Shots (Força): 6 <br> Alcance: 9 <br>",
                'status' => 'defense',
            ],
            [
                'imagem' => 'Bowser_MPT.png',
                'nome' => 'Bowser',
                'descricao' => 'Bowser domina a quadra com golpes absurdamente fortes e pesados, tornando qualquer devolução um desafio. Sua velocidade é limitada, mas sua presença intimidadora e seu Power Shot destruidor fazem dele um dos oponentes mais difíceis de enfrentar.',
                'stats' => "Força: 10 <br> Velocidade: 3 <br> Controlabilidade: 4 <br> Power Shots (Força): 10 <br> Alcance: 7 <br>",
                'status' => 'power',
            ],
            [
                'imagem' => 'DK_MPT.png',
                'nome' => 'DK',
                'descricao' => 'DK combina força bruta com um alcance impressionante, cobrindo grande parte da quadra com seus braços longos. Seus golpes têm um peso imenso, e seu Power Shot pode ser devastador. No entanto, sua movimentação é um pouco lenta, exigindo um bom posicionamento.',
                'stats' => "Força: 9 <br> Velocidade: 4 <br> Controlabilidade: 5 <br> Power Shots (Força): 9 <br> Alcance: 8 <br>",
                'status' => 'power',
            ],
            [
                'imagem' => 'Koopa_MPT.png',
                'nome' => 'Koopa',
                'descricao' => 'Pequeno e veloz, Koopa Troopa é um jogador que aposta na agilidade para vencer. Ele alcança bolas com facilidade e tem um efeito natural em seus golpes, dificultando as devoluções adversárias. Seu Power Shot também pode ser traiçoeiro para quem não estiver preparado.',
                'stats' => "Força: 3 <br> Velocidade: 9 <br> Controlabilidade: 3 <br> Power Shots (Força): 4 <br> Alcance: 7 <br>",
                'status' => 'speed',
            ],
            [
                'imagem' => 'Paratroopa_MPT.png',
                'nome' => 'Paratroopa',
                'descricao' => 'Paratroopa é como Koopa, mas com um diferencial: sua habilidade de flutuar levemente ao se mover. Isso lhe dá uma pequena vantagem no tempo de reação, tornando seus retornos ainda mais difíceis de prever. Sua jogabilidade ágil compensa sua falta de potência.',
                'stats' => "Força: 3 <br> Velocidade: 8 <br> Controlabilidade: 2 <br> Power Shots (Força): 4 <br> Alcance: 7 <br>",
                'status' => 'technique',
            ],
            [
                'imagem' => 'Boo_MPT.png',
                'nome' => 'Boo',
                'descricao' => 'Boo é um mestre dos efeitos, capaz de colocar curvas absurdas na bola, deixando os oponentes desorientados. Seus slices são extremamente angulados, forçando adversários a correrem muito para devolver. Porém, sua força nos golpes não é seu ponto forte.',
                'stats' => "Força: 4 <br> Velocidade: 7 <br> Controlabilidade: 9 <br> Power Shots (Força): 5 <br> Alcance: 6 <br>",
                'status' => 'tricky',
            ],
            [
                'imagem' => 'Shy_Guy_MPT.png',
                'nome' => 'Shy Guy',
                'descricao' => 'Shy Guy tem um estilo de jogo equilibrado, com golpes decentes e boa movimentação. Seu diferencial está na consistência, sendo um personagem confiável para trocas de bola longas. Seu Power Shot adiciona um bom elemento surpresa para quebrar a defesa adversária.',
                'stats' => "Força: 5 <br> Velocidade: 6 <br> Controlabilidade: 7 <br> Power Shots (Força): 6 <br> Alcance: 6 <br>",
                'status' => 'technique',
            ],
            [
                'imagem' => 'Diddy_MPT.png',
                'nome' => 'Diddy Kong',
                'descricao' => 'Diddy é um jogador incrivelmente ágil, que se move com facilidade pela quadra. Ele pode devolver bolas difíceis e ainda manter um ritmo acelerado, desgastando seus oponentes. Seu tamanho pequeno pode ser uma desvantagem, mas sua velocidade compensa.',
                'stats' => "Força: 5 <br> Velocidade: 9 <br> Controlabilidade: 6 <br> Power Shots (Força): 5 <br> Alcance: 6 <br>",
                'status' => 'speed',
            ],
            [
                'imagem' => 'Bowser_Junior_MPT.png',
                'nome' => 'Bowser Jr',
                'descricao' => 'Bowser Jr. é resistente e tem um ótimo alcance para bloquear ataques. Ele pode frustrar os oponentes com sua defesa consistente e Power Shots que desviam a bola de forma imprevisível. Seu único ponto fraco é a velocidade reduzida em comparação com outros personagens.',
                'stats' => "Força: 6 <br> Velocidade: 7 <br> Controlabilidade: 9 <br> Power Shots (Força): 6 <br> Alcance: 8 <br>",
                'status' => 'tricky',
            ],
            [
                'imagem' => 'Petey_Piranha_MPT.png',
                'nome' => 'Petey Piranha',
                'descricao' => 'Petey é uma verdadeira muralha, com golpes extremamente fortes e um alcance absurdo. Seu tamanho grande pode atrapalhá-lo em certos momentos, mas seus tiros pesados fazem dele um jogador difícil de parar. Seu Power Shot pode ser uma sentença de ponto garantido.',
                'stats' => "Força: 10 <br> Velocidade: 3 <br> Controlabilidade: 4 <br> Power Shots (Força): 10 <br> Alcance: 9 <br>",
                'status' => 'power',
            ],
            [
                'imagem' => 'Wiggler_MPT.png',
                'nome' => 'Wiggler',
                'descricao' => 'Wiggler é um personagem robusto, com golpes desconcertantes e grande alcance na quadra. Sua movimentação pode ser um pouco desajeitada devido ao seu tamanho, mas ele compensa com defesa impenetrável e resistência. Quando entra em fúria, seus ataques ficam ainda mais agressivos, tornando-o um oponente perigoso. Seu estilo de jogo exige paciência para aproveitar sua força ao máximo.',
                'stats' => "Força: 5 <br> Velocidade: 4 <br> Controlabilidade: 5 <br> Power Shots (Força): 7 <br> Alcance: 10 <br>",
                'status' => 'defense',
            ],
            [
                'imagem' => 'Fly_Guy_MPT.png',
                'nome' => 'Fly Guy',
                'descricao' => 'Fly Guy usa sua habilidade de levitação para cobrir a quadra com facilidade, tornando-se difícil de prever. Seu controle sobre os efeitos na bola é excelente, permitindo golpes curvados inesperados que confundem os adversários. Apesar de não ter muita força nos tiros, sua agilidade e truques compensam, tornando-o um jogador frustrante para enfrentar.',
                'stats' => "Força: 4 <br> Velocidade: 9 <br> Controlabilidade: 3 <br> Power Shots (Força): 4 <br> Alcance: 8 <br>",
                'status' => 'defense',
            ],
        ];

        DB::table('personagens')->insert($personagens);
    }
}
