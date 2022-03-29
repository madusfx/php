<?php 
    function maiorValor($array) {
        $maior = 0;
        for ($i = 0; $i < sizeof($array); $i++) {
            if ($array[$i] > $maior) {
                $maior = $array[$i];
            }
        }
        return $maior;
    }

    function menorValor($array) {
        $menor = 100;
        for ($i = 0; $i < sizeof($array); $i++) {
            if ($array[$i] < $menor) {
                $menor = $array[$i];
            }
        }
        return $menor;
    }

    function numeroValores($array) {
        return sizeof($array);
    }

    function mediaValores($array) {
        $soma = 0;
        for ($i = 0; $i < sizeof($array); $i++) {
            $soma += $array[$i];
        }
        return $soma / sizeof($array);
    }

    function ordenaValores($array) {
        asort($array);
        print_r($array);
    }

    function buscaValor($array, $valor) {
        $trueorfalse;
        for ($i = 0; $i < sizeof($array); $i++) {
            if ($array[$i] == $valor) {
                return $trueorfalse = 'true';
            }
        }
        return $trueorfalse = 'false';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Funções com Arrays</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php require('functions.php'); ?>
    <?php 
        $array = [10, 50, 5, 90, 50, 8, 70];
        echo maiorValor($array);
    ?>
  </body>
</html>