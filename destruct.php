<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>destrutive</title>
</head>
<body>
    <?php
        class Car {
            public $name;
            public $color;
            
            function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
            }
            
            function __destruct(){
                echo "My favourate car is {$this->name} with color {$this->color} ";
            }
        }
            
    $myCar = new Car('Mercedies', "dark blue");

    ?>
</body>
</html>