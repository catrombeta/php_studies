<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php
            // TIPO VOID
        function exibirBoasVindas() {
            echo 'Bem vindo ao curso de PHP! <br />';
        }

        exibirBoasVindas(); // posso chamar quantas vezes eu quiser

            // TIPO RETURN
        function calcularAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;
            return $area;
        }

        // echo calcularAreaTerreno(30, 50);
        $resultado = calcularAreaTerreno(30, 20);
        echo $resultado;

    ?>
</body>
</html>