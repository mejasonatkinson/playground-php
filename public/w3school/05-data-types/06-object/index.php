<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>w3schools Playground</title>
</head>
<body>
    
    <h1>w3schools Playground</h1>
    <h2>Object</h2>

    <?php 

        // Classes and objects are the two main aspects of object-oriented programming.

        // A class is a template for objects, and an object is an instance of a class.

        // When the individual objects are created, they inherit all the properties and behaviors from the class, 
        // but each object will have different values for the properties.

   






        // Let's assume we have a class named Car
        class Car {
            // A Car can have properties like model, color, etc. 
            // We can define variables like $model, $color, and so on, to hold the values of these properties.
            public $color;
            public $model;
            public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
            }
            public function message() {
            return "My car is a " . $this->color . " " . $this->model . "!";
            }
        }
        // When the individual objects (Volvo, BMW, Toyota, etc.) are created, 
        // they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
        // If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
        $myCar = new Car("black", "Volvo");
        echo $myCar -> message();
        echo "<br>";
        $myCar = new Car("red", "Toyota");
        echo $myCar -> message();

    ?>

</body>
</html>