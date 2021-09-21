<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOAÇÃO DE SANGUE</title>
    <link href="css/if.css" rel="stylesheet">
</head>
<body>
    <?php
        $age = 16;
        $weight = 50;
    ?>
    
    <h1>VOCÊ PODE DOAR SANGUE?</h1>

    <p>Você tem <?= $age ?> anos</p>
    <p>Seu peso é <?= $weight ?>kg</p>

    <p>
        <?php
            if($age >= 16 && $age <= 69 && $weight >= 50) {
                echo "ATENDE AOS REQUISITOS PODE DOAR SANGUE";
            } else {
                echo "NÃO ATENDE AOS REQUISITOS NÃO PODE DOAR SANGUE";
            }
        ?>
    </p>
</body>
</html>