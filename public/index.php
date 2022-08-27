<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        // this is a single line comment.
        
        # this is also a single line comment.

        /*
        ******************************
        multiple-lines comment.
        ******************************
        */

        $varHelloWorld = "Hello world";

        echo $varHelloWorld . " my name is Jason";

        echo "<br>";
        echo "<br>";

        $x = 5; 
        $y = 4; 
        echo $x + $y;

        // global scope can't us in a function
        // UNLESS you use the global key word.

        function addXY() {
            global $x, $y;
            $y = $x + $y;
            // OR
            // $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        
        addXY();

        echo "<br>";
        echo "<br>";

        echo $y; // outputs 9

        // scoped variables can't be used outside of the function
        // UNLESS you use the static key word

        echo "<br>";
        echo "<br>";


        function staticZ() {
            static $z = 0;
            echo $z;
            $z++;
        }
        
        staticZ();
        staticZ();
        staticZ();

        // https://www.w3schools.com/php/php_echo_print.asp

    ?>
</body>
</html>