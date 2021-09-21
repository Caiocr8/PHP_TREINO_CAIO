<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF E ELSE</title>
    <link href="css/if.css" rel="stylesheet">
</head>
<body>
    <?php        
        $user_get_card = true;
        $purchase_value = 450;
        $fare_value = 50;
        $take_discount = true;
        $amount_value = $purchase_value + $fare_value;

        if($user_get_card == true && $purchase_value >= 400) {
            $fare_value = 0;
        } else if($user_get_card == true && $purchase_value >= 300) {
            $fare_value = 10;
        } else if($user_get_card == true && $purchase_value >= 100) {
            $fare_value = 25;
        } else {
            $take_discount = false;
        }
    ?>
    <h1>DETALHES DO PEDIDO</h1>
    <p>Possui cartão da loja?
        <?php
            if($user_get_card == true) {
                echo "SIM";
            } else {
                echo "NÃO";
            }
        ?>
    </p>   
    <p>Valor da compra: <?= $purchase_value?></p>        
    <p>Recebeu desconto no frete?
        <?php
            if($take_discount == true) {
                echo "SIM";
            } else {
                echo "NÃO";
            }
        ?>
    </p>
    <p>Valor do Frete: <?= $fare_value?></p>   
    <p>VALOR TOTAL: 
        <?php
            if($fare_value == 0) {
                $amount_value = $purchase_value;
                echo $purchase_value;
            } else {
                $amount_value = $purchase_value + $fare_value;
                echo $amount_value;
            }
        ?>
    </p>
</body>
</html>