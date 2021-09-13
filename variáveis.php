<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VARIÁVEIS</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php
        $name = "Caio";
        $age = 18;
        $peso = 73;
        $fumante_sn = false;
    ?>
    
    <h1>FICHA DE CADASTRO</h1>
    <br/>
    <p>Nome: <?=$name?></p>
    <p>Idade: <?=$age?></p>
    <p>Peso: <?=$peso?> KG</p>
    <p>É fumante? <?=$fumante_sn?></p>

   
</body>
</html>