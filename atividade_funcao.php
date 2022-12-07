<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - Funções</title>
</head>
<body>
    <?php
        
        function calcularIRS($base_de_calculo) {
            $aliquota = 0;
            $resultado = $base_de_calculo * $aliquota;
            if ($base_de_calculo <= 1903.98) {
                echo "Está isento do pagamento de IRS";
            } else if ($base_de_calculo >= 1903.99 && $base_de_calculo <= 2826.65) {
                $aliquota = 0.075;
                echo "O valor a ser pago é de " . $resultado;
            } else if ($base_de_calculo >= 2826.66 && $base_de_calculo <= 3751.05) {
                $aliquota = 0.15;
                echo "O valor a ser pago é de " . $resultado;
            } else if ($base_de_calculo >= 3751.06 && $base_de_calculo <= 4664.68) {
                $aliquota = 0.225;
                echo "O valor a ser pago é de " . $resultado;
            } else {
                $aliquota = 0.275;
                echo "O valor a ser pago é de " . $resultado;
            }

            return $aliquota;
        }

        echo calcularIRS(2300);
    ?>
</body>
</html>