<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLASSES</title>
</head>
<body>
    <?php
        
        class People{
            
            public $name;
            public $age;
            public $weight;
            public $play_soccer;

            public function __construct($name,$age,$weight,$play_soccer) {
                $this->name = $name;
                $this->age = $age;
                $this->weight = $weight;
                $this->play_soccer = $play_soccer;
                
            }

            public function printPeople(){
                echo $this->name;
                echo '<br>';
                echo $this->age;
                echo '<br>';
                echo $this->weight;
                echo '<br>';
                if($this->play_soccer == true) {
                    echo "Ele Joga Futebol";
                } else{
                    echo "Ele não joga futebol";
                }
            }
        }

        

        $people = new People("Caio Rafael Rocha de Andrade", 18,70, true);
        
        $people->printPeople();
                
            
    ?>
</body>
</html>