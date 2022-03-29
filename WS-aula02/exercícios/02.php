<?php 
    $vitorias = [0, 0, 0, 1, 1, 1, 0, 1, 1, 0, 0, 0];
    function checaResultado($vitorias, $jogador) {
        $quantidadeVitorias = 0;
        for ($i = 0; $i < sizeof($vitorias); $i++) {
            if ($vitorias[$i] == $jogador) {
                $quantidadeVitorias++;
            }
        }
        if ($jogador == 1) {
            $nomeJogador = 'Adão';
        }
        else {
            $nomeJogador = 'Eva';
        }
        echo 'O número de vitórias de ' . $nomeJogador . ' é igual a: ' . $quantidadeVitorias;
    }
    checaResultado($vitorias, 0);
?>
