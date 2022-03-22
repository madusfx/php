<!-- Faça um script PHP que considere valores para a altura (h) e o sexo de uma pessoa (M - masculino e F - feminino),
e invoque uma função que calcula o peso ideal desta pessoa de acordo com o sexo, usando (o resultado deve ser mostrado na tela do navegador  com a função echo. ): 
para homens: (72.7 * h) - 58
para mulheres: (62.1 * h) - 44.7 -->

<form action="03.php" method="post">
    Digite a sua altura: <input type="text" name="altura"><br>
    Selecione o seu sexo: 
    <select name="sexo">
        <option value="" selected disabled hidden>Choose here</option>
        <option value="1">Feminino</option>
        <option value="2">Masculino</option>
    </select><br>
    <input type=submit>
</form>

<?php
    $altura = $_POST['altura'];
    $sexo = $_POST['sexo'];
    if ($sexo == "1") {
        $pesoideal = (62.1 * $altura) - 44.7;
        echo "O peso ideal é de: " . $pesoideal;
    }
    else if ($sexo == "2") {
        $pesoideal = (72.7 * $altura) - 58;
        echo "O peso ideal é de: " . $pesoideal;
    }
?>