<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polymorphism</title>
</head>
<body>
    <h1>Polymorphism</h1>
    <?php
    interface Machine {
        public function calcTask();
    }
    class Circle implements Machine {
        private $radius;
        public function __construct($radius){
            $this -> radius = $radius;
        }
        public function calcTask(){
            return $this -> radius * $this  -> radius * pi();
        }
    }

    class Rectangle implements Machine {
        private $width;
        private $height;
        public function __construct($width, $height) {
            $this -> width = $width;
            $this -> height = $height;
        }
        public function calcTask() {
            return $this -> width * $this -> height;
        }
    }

    $mycirc = new Circle(3);
    $myrect = new Rectangle(3, 4);
    echo $mycirc-> calcTask();
    echo $myrect -> calcTask();
    

    //example  2

    abstract class Person 
{
    abstract public function greet();
}

class English extends Person 
{
    public function greet()
    {
        return 'Hello!';
    }
}

class German extends Person 
{
    public function greet()
    {
        return 'Hallo';
    }
}

class Wakhi extends Person {
    public function  greet ()
    {
        return "Chex Holi!";
    }
}

function greeting($people)
{
    foreach($people as $person) {
        echo $person -> greet() . '<br>';
    }
}

// define an array of object of the english german and wakhi

$people = [
    new English(),
    new German(),
    new Wakhi(),
];
greeting($people);


// PHP Polymorphism using an interface

interface Greeting {
    public function greet()
    {
        return "Hello!";
    }
}

class German implements Greeting
{
    public function greet () 
    {
        return 'Hallo!';
    }
}

class French implements Greeting 
{
    public function greet()
    {
        return "Bonjour!";
    }


//Create array for greeting() method;

function greeting($greeters)
{
    foreach ($greeters as $greeter) {
        echo $greeter->greet() . "<br>";
    }
}

$greeters = [
    new English();
    new German();
    new French();
];
greeting($greeters);


class Person3 {
    // to store name of person 
    public $name;

    //print name
    function get_name()
    {
        return $this->name;
    }
    
    // set name
    function set_name($new_name){
        $this->name = $new_name;
    }
}

class Human extends Person3 {

    //for male 
    function male()
    {
        echo "This human is a male";
    }

    function female(){
        echo "This human is female";
    }
}

$maleOne = new Person()

    ?>
</body>
</html>