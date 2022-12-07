<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If/else encadeamento</title>
</head>
<body>
    <?php
        $usuario_possui_cartao = true;
        $valor_compra = 450;

        $valor_frete = 50;
        $desconto_frete = false;

        if ($usuario_possui_cartao && $valor_compra >= 400) {
            $valor_frete = 0;
            $desconto_frete = true;
        } else if ($usuario_possui_cartao && $valor_compra >= 300) {
            $valor_frete = 10;
            $desconto_frete = true;
        } else if ($usuario_possui_cartao && $valor_compra >= 100) {
            $valor_frete = 25;
            $desconto_frete = true;
        }
    ?>
</body>
</html>