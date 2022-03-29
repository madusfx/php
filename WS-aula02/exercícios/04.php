<?php
    $matriz = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    function transpor_matriz($matriz) {
        $out = array();
        foreach ($matriz as $rowkey => $row) {
            foreach($row as $colkey => $col){
                $out[$colkey][$rowkey]=$col;
            }
        }
        return $out;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <table>
        <p>Matriz normal</p>
        <tr>
            <td><?php echo $matriz[0][0] ?></td>
            <td><?php echo $matriz[0][1] ?></td>
            <td><?php echo $matriz[0][2] ?></td>
        </tr>
        <tr>
            <td><?php echo $matriz[1][0] ?></td>
            <td><?php echo $matriz[1][1] ?></td>
            <td><?php echo $matriz[1][2] ?></td>
        </tr>
        <tr>
            <td><?php echo $matriz[2][0] ?></td>
            <td><?php echo $matriz[2][1] ?></td>
            <td><?php echo $matriz[2][2] ?></td>
        </tr>
    </table>
    <table>
        <p>Matriz transposta</p>
        <tr>
            <td><?php echo transpor_matriz($matriz)[0][0] ?></td>
            <td><?php echo transpor_matriz($matriz)[0][1] ?></td>
            <td><?php echo transpor_matriz($matriz)[0][2] ?></td>
        </tr>
        <tr>
            <td><?php echo transpor_matriz($matriz)[1][0] ?></td>
            <td><?php echo transpor_matriz($matriz)[1][1] ?></td>
            <td><?php echo transpor_matriz($matriz)[1][2] ?></td>
        </tr>
        <tr>
            <td><?php echo transpor_matriz($matriz)[2][0] ?></td>
            <td><?php echo transpor_matriz($matriz)[2][1] ?></td>
            <td><?php echo transpor_matriz($matriz)[2][2] ?></td>
        </tr>
    </table>
  </body>
</html>