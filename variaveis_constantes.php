<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VARIÁVEIS CONSTANTES</title>
</head>
<body>
    <?php

        define('BD_URL', 'endereço_bd_dev');
        define('BD_NAME' , 'name_bd_dev');
        define('BD_SENHA', 'senha_dev');

        // .. Lógica .. //

        echo BD_URL . '<br />';
        echo BD_NAME . '<br />';
        echo BD_SENHA . '<br />';
    ?>
</body>
</html>