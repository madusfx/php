<?php 
    $vendas = [
        [20, 30, 40, 50],
        [100, 10, 45, 25],
        [10, 10, 230, 110],
        [130, 80, 70, 20],
        [80, 90, 50, 50]
    ];

    function calculaTotal($vendas, $vendedor) {
        $total = 0;
        for ($i = 0; $i < 4; $i++) {
            $total += $vendas[$vendedor][$i];
        }
        return $total;
    }

    function calculaTotalSemanal($vendas, $semana) {
        $totalSemanal = 0;
        for ($i = 0; $i < 5; $i++) {
            $totalSemanal += $vendas[$i][$semana];
        }
        return $totalSemanal;
    }

    function calculaTotalMensal($vendas) {
        $totalMensal = 0;
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 4; $j++) {
                $totalMensal += $vendas[$i][$j];
            }
        }
        return $totalMensal;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <div>
        <h1>Vendas por mês</h1>
        <p><?php echo 'Total mensal do vendedor 0: R$' . calculaTotal($vendas, 0)?></p>
        <p><?php echo 'Total mensal do vendedor 1: R$' . calculaTotal($vendas, 1)?></p>
        <p><?php echo 'Total mensal do vendedor 2: R$' . calculaTotal($vendas, 2)?></p>
        <p><?php echo 'Total mensal do vendedor 3: R$' . calculaTotal($vendas, 3)?></p>
        <p><?php echo 'Total mensal do vendedor 4: R$' . calculaTotal($vendas, 4)?></p>
    </div>
    <table>
        <h1>Vendas por semana</h1>
        <tr>
            <td>Semana 1</td>
            <td>Semana 2</td>
            <td>Semana 3</td>
            <td>Semana 4</td>
        </tr>   
        <tr>
            <td><?php echo 'R$' . calculaTotalSemanal($vendas, 0) ?></td>
            <td><?php echo 'R$' . calculaTotalSemanal($vendas, 1) ?></td>
            <td><?php echo 'R$' . calculaTotalSemanal($vendas, 2) ?></td>
            <td><?php echo 'R$' . calculaTotalSemanal($vendas, 3) ?></td>
        </tr> 
    </table>
    <div>
        <h1>Total de vendas no mês da empresa</h1>
        <p><?php echo 'Total menssal da empresa é: R$' . calculaTotalMensal($vendas) ?></p>
    </div>
  </body>
</html>