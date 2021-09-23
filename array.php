<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
    <link href="css/if.css" rel="stylesheet">
</head>
<body>
    <?php
        $fruitList = array(
            "a" => "Banana",
            "b" => "Pineapple",
            "c" => "Apple",
            "d" => "Orange",
        );
        $fruitList2 = array(
            "e" => "Strawberry",
            "f" => "Pear",
            "g" => "Grape",
            "h" => "Cashew",
        );
        $fruitListFull = array_merge($fruitList, $fruitList2);
        print_r($fruitListFull);
    ?>
</body>
</html>