<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
</head>
<body>
    <?php
    class Student {
        public $name;
        public $regNo;
        function __construct($name, $regNo){
            $this->name = $name;
            $this->regNo= $regNo;
        }

        function get_name(){
            return $this-> name;
        }
        function get_regNo(){
            return $this->regNo;
        }
    }

    $newStudent = new Student("sher karim", "kiu-bs-1038");
    echo $newStudent->get_name();
    echo "<br>";
    echo $newStudent->get_regNo();
        
        cl 
        
        
        
        ?>
</body>
</html>