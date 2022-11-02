<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Orient Programming</title>
</head>
<body>
    <?php
    class Car {
        public $name;
        public $color;
        public $price;

        function set_name($name){
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }

        // function set_color($color){
        //     $this->color = $color
        // };
        
        // function get_name() {
        //     return $this->color;
        // };

        // function set_price($price){
        //     $this->price = $price;
        // };

        // function get_price(){
        //     return $this->price
        // };
    };
    $Toyta = new Car();
    $Ferrari = new Car();
    $Toyta->set_name("Toyta");
    $Ferrari->set_name("Ferrari");
    echo $Toyta->get_name();
    echo"<br>";
    echo $Ferrari->get_name();
    ?>
</body>
</html>