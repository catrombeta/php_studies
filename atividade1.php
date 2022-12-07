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
        $idade = 25;
        $peso = 50;

        if (($idade >= 16 && $idade <= 69) && $peso >= 50) {
            print 'Atende aos requisitos';
        } else {
            print 'Não atende aos requisitos';
        }
    ?>
</body>
</html>