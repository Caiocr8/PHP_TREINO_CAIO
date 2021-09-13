<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONCATENAÇÃO</title>
</head>
<body>

    <?php

        $nome = "Maria";
        $cor = "Amarelo";
        $idade = 35;
        $atividade_preferida = "Se Maquiar";

        echo "Olá " . $nome . " Verífiquei aqui que sua cor favorita é o
         " . $cor . " sua idade é de " . $idade . " anos e você adora " . $atividade_preferida;

        echo "<br/>";
        
        echo "Olá $nome , Verífiquei aqui que sua cor favorita é o $cor vi também que sua idade é de $idade anos e você adora $atividade_preferida";
    ?>
</body>
</html>