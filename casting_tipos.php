<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Casting</title>
</head>
<body>
    <?php
        $valor = 10.14;
        $valor2 = (int) $valor; // transformou em número inteiro. Pode ser utilizado int ou integer

        echo gettype($valor);
        echo ('<br />');
        echo gettype($valor2);

    ?>
</body>
</html>