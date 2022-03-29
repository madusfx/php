<?php
    $string = "Stark#Bran, Arya, Tony#Wolf";
    $vetor = explode('#', $string);
    $nomes = explode(',', $vetor[1]);
    $array = ['family' => $vetor[0], 'names' => $nomes, 'pet' => $vetor[2]];
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Family <?php echo $array['family']?></h1>
    <p>
        <b>Pet: </b>
        <?php echo $array['pet']?>
    </p>
    <div>
    <b>Members: </b>
        <ol>
            <li><?php echo $array['names'][0]?></li>
            <li><?php echo $array['names'][1]?></li>
            <li><?php echo $array['names'][2]?></li>
        </ol>
    </div>
  </body>
</html>