<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polymorphism</title>
</head>
<body>
    <h2>Polymorphism</h2>

    <?php
    class northCodeX 
    {
       var  $url = "https://www.northcodex.com/"."<br>";

        // class method
        function desc(){
            echo "Working as a PHP and Nodejs developer at NorthCodex"."<br>";
        }
    }

    // creating class object 
    $obj = new NorthCodeX();

    // accessing class variable 
    echo $obj->url;
    //calling class method
    $obj->desc();
    

    class SoftDrink {
    var $name;
    var $price;

    function showProps(){
        echo "The drink " . $this->name . " and its price is " . $this->price . "<br>";
    }
    }

    $drinks = new SoftDrink();
    // assigning values to variables
    $drinks->name = "Cola";
    $drinks->price = "50 PKR";
    $drinks->showProps();
    ?>
    
</body>
</html>