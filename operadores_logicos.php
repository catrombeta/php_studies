<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores lógicos</title>
</head>
<body>
    <?php
        /*
            AND ou && - verdadeiro se todas as expressões forem verdadeiras
            OR ou || - pelo menos uma expressão verdadeira
            XOR - verdadeiro quando se APENAS UMA das expressões forem verdadeiras
            ! - operador de negação. Inverte o resultado da expressão.
        */

        if(2 == 2 && 3 == 4) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso <br />';
        }

        if(2 == 2 XOR 3 == 4) {
            echo 'Verdadeiro - XOR <br />';
        } else {
            echo 'Falso - XOR';
        }

        if(!(2 == 2 XOR 3 == 4)) {
            echo 'Verdadeiro - XOR + NEGAÇÃO';
        } else {
            echo 'Falso - XOR + NEGAÇÃO';
        }
    ?>
</body>
</html>