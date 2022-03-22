<form action="02.php" method="post">
    Nota 1: <input type="text" name="nota1"><br>
    Nota 2: <input type="text" name="nota2"><br>
    Nota 3: <input type="text" name="nota3"><br>
    <input type=submit>
</form>

<?php
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $media = ($nota1 + $nota2 + $nota3) / 3;
    if ($media >= 7) {
        echo "Aluno aprovado com média de: " . $media;
    }
    else if ($media >= 4 && $media < 7) {
        echo "Aluno convocado para prova final com média de: " . $media;
    }
    else {
        echo "Aluno reprovado com média de: " . $media;
    }
?>