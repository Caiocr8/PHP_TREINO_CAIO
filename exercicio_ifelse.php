<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA</title>
    <link href="if.css" rel="stylesheet">
</head>
<body>

    <h1>CALCULADORA SIMPLES</h1>
    <h2>
        CALCULADORA DE EXPRESSÕES SIMPLES EM PHP
    </h2>
    <h3>
        <ul>
            <li>PARA SOMAR DIGITE 1</li>
            <li>PARA SUBTRAIR DIGITE 2</li>
            <li>PARA MULTIPLICAR DIGITE 3</li>
            <li>PARA DIVIDIR DIGITE 4</li>
        </ul>
    </h3>  
    
    <?php
        $calculo = 4;

        $number1 = 3;
        $number2 = 3;

        if($calculo == 1) {
            $calculo = "SOMA";
            $expressao = $number1 + $number2;
        } else if ($calculo == 2) {
            $calculo = "SUBTRAÇÃO";
            $expressao = $number1 - $number2;
        } else if ($calculo == 3) {
            $calculo = "MULTIPLICAÇÃO";
            $expressao = $number1 * $number2;
        } else if ($calculo == 4) {
            $calculo = "DIVISÃO";
            $expressao = $number1 / $number2;
        } else {
            echo "EXPRESSÃO INVALIDA TENTE NOVAMENTE";
        }        
    ?>

    <p>A <?=$calculo?> DE <?=$number1?> E <?=$number2?> E IGUAL A : <?=$expressao?> </p>

</body>
</html>