<?php
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'http://jsuol.com.br/c/monaco/utils/gestor/commons.js?file=commons.uol.com.br/sistemas/esporte/modalidades/futebol/campeonatos/dados/2021/30/dados.json');
    $tabela = curl_exec($ch);
    curl_close($ch);

    $tabela = json_decode($tabela);

    $equipes = [];
    foreach($tabela->equipes as $id => $equipe) {
        $time = (array) $equipe;
        $equipes[$time['id']]["id"] = $time['id'];
        $equipes[$time['id']]["nome"] = $time['nome'];
        $equipes[$time['id']]["nome-comum"] = $time['nome-comum'];
        $equipes[$time['id']]["brasao"] = $time['brasao'];
        $equipes[$time['id']]["sigla"] = $time['sigla'];
    }
    $classificacao = [];
    foreach($tabela->fases as $table) {
        foreach($table->classificacao->equipe as $id => $equipe) {
            $time = (array) $equipe;
            $classificacao[$id]["time_id"] = $time["id"];
            $classificacao[$id]["posicao"] = $time["pos"];
            $classificacao[$id]["pontos"] = $time["pg"]->total;
            $classificacao[$id]["jogos"] = $time["j"]->total;
            $classificacao[$id]["vitorias"] = $time["v"]->total;
            $classificacao[$id]["empates"] = $time["e"]->total;
            $classificacao[$id]["derrotas"] = $time["d"]->total;
            $classificacao[$id]["saldo"] = $time["sg"]->total;
        }
    }
    usort($classificacao, function($a, $b){
        return ($a['posicao'] < $b['posicao']) ? -1 : 1;
    });
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <table>
        <tr>
            <td>Posição</td>
            <td>Time</td>
            <td>Pontos</td>
            <td>Jogos</td>
            <td>Vitórias</td>
            <td>Derrotas</td>
            <td>Empates</td>
        </tr>
        <tr>
            <td><?php echo $classificacao[0]["posicao"] ?></td>
            <td>
                <img src="<?php echo $equipes[4]["brasao"] ?>">
                <p><?php echo $equipes[4]["nome"] ?></p>
            </td>
            <td><?php echo $classificacao[0]["pontos"] ?></td>
            <td><?php echo $classificacao[0]["jogos"] ?></td>
            <td><?php echo $classificacao[0]["vitorias"] ?></td>
            <td><?php echo $classificacao[0]["derrotas"] ?></td>
            <td><?php echo $classificacao[0]["empates"] ?></td>
        </tr>
        <tr>
            <td><?php echo $classificacao[1]["posicao"] ?></td>
            <td>
                <img src="<?php echo $equipes[1]["brasao"] ?>">
                <p><?php echo $equipes[1]["nome"] ?></p>
            </td>
            <td><?php echo $classificacao[1]["pontos"] ?></td>
            <td><?php echo $classificacao[1]["jogos"] ?></td>
            <td><?php echo $classificacao[1]["vitorias"] ?></td>
            <td><?php echo $classificacao[1]["derrotas"] ?></td>
            <td><?php echo $classificacao[1]["empates"] ?></td>
        </tr>
        <tr>
            <td><?php echo $classificacao[2]["posicao"] ?></td>
            <td>
                <img src="<?php echo $equipes[17]["brasao"] ?>">
                <p><?php echo $equipes[17]["nome"] ?></p>
            </td>
            <td><?php echo $classificacao[2]["pontos"] ?></td>
            <td><?php echo $classificacao[2]["jogos"] ?></td>
            <td><?php echo $classificacao[2]["vitorias"] ?></td>
            <td><?php echo $classificacao[2]["derrotas"] ?></td>
            <td><?php echo $classificacao[2]["empates"] ?></td>
        </tr>
        <tr>
            <td><?php echo $classificacao[3]["posicao"] ?></td>
            <td>
                <img src="<?php echo $equipes[35]["brasao"] ?>">
                <p><?php echo $equipes[35]["nome"] ?></p>
            </td>
            <td><?php echo $classificacao[3]["pontos"] ?></td>
            <td><?php echo $classificacao[3]["jogos"] ?></td>
            <td><?php echo $classificacao[3]["vitorias"] ?></td>
            <td><?php echo $classificacao[3]["derrotas"] ?></td>
            <td><?php echo $classificacao[3]["empates"] ?></td>
        </tr>
        <tr>
            <td><?php echo $classificacao[4]["posicao"] ?></td>
            <td>
                <img src="<?php echo $equipes[6]["brasao"] ?>">
                <p><?php echo $equipes[6]["nome"] ?></p>
            </td>
            <td><?php echo $classificacao[4]["pontos"] ?></td>
            <td><?php echo $classificacao[4]["jogos"] ?></td>
            <td><?php echo $classificacao[4]["vitorias"] ?></td>
            <td><?php echo $classificacao[4]["derrotas"] ?></td>
            <td><?php echo $classificacao[4]["empates"] ?></td>
        </tr>
    </table>
  </body>
</html>