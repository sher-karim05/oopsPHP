<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php

    //base class
    class Jewlary {
        //access modefier
        public $price = "The price is fix: 1000000";

        function getMessage(){
            echo $this->$price;
        }
    }

    class NeckLess extends Jewlary {
        function print(){
            echo $this->$price;
        }
    }

    //create obj of subclass
    $obj = new NeckLess;
    echo $obj -> price;


    //public access modefier

    class Car {
        public $model;

        function setModel($model){
            $this->model = $model;
        }

        public function hello(){
            return "beep! Iam a <i>" . $this -> model . "</i><br>";
        }
    }

    // The child class inherits the code from the parent class d
    class SportsCar extends Car {
        
    }

    //Create an instance from the child class
    $sportsCar1 = new SportsCar();
    // Set the value of the class' property .
    //For this aim.
    $sportsCar1 -> setModel('Mercedes Benz');

    //Use another method that the child class inherited from

    echo $sportsCar1 -> hello();
echo "<br>";

    //Private access modefier 
    class CarOne {
        // A private property or method can be used by both the parent and the child classes.

        public function setModel($model){
            $this-> model = $model;
        }

        public function getModel()
        {
            return $this-> model;
        }
    }

    // The child class can use the code it inherited form the parent class 
    class SportsCarOne extends CarOne {
        private $style = 'fast and furious';

            public function driveItWithStyle()
            {
                return 'Drive a ' . $this -> getModel() . ' <i>' . $this -> style . '<i>';
            }
    }

    //Create an instance from the child class
    $sportsCar1 = new SportsCarOne();

    //Use a method that the child class inherited from the parent class
    $sportsCar1 -> setModel('Ferrari');

    // Use a method that was added to the child class 
    echo $sportsCar1 -> driveItWithStyle();
    echo "<br>";

    // the parent class 
    class CarProtected {
        //The $model property is private, thus it casn be accessed 
        // only from inside the class

        protected $model;

        public function setModel($model)
        {
            $this -> model = $model;
        }
    }

    // the child class

    class LatestCar extends CarProtected {
        //Tries to get a private property that belongs to the parameters
        public function hello()
        {
            return "I am a <b>" . $this-> model . "</b> <br />";
        }
    }

    // Create an instance from the child class 
    $sportsCar2 = new LatestCar();

    //Set the class model name 
    $sportsCar2 -> setModel('Mercedes Benz');

    //Get the class model name
    echo $sportsCar2 ->hello()
    ?>
</body>
</html>