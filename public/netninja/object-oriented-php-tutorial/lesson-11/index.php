<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Net Ninja Playground</title>
    <link rel="stylesheet" href="../../../reset-style.css">
</head>
<body>
    <h1>Net Ninja Playground</h1>
    <h2>Object Oriented PHP #11 - Static Properties</h2>

    <?php 

        class Weather {

        public static $tempConditions = ['cold', 'mild', 'warm'];

        public static function celsiusToFarenheit($c){
            return $c * 9 / 5 + 32;
        }

        public static function determineTempCondition($f){
            if($f < 40){
            return self::$tempConditions[0];
            } elseif($f < 70){
            return self::$tempConditions[1];
            } else {
            return self::$tempConditions[2];
            }
        }

        }

        //print_r(Weather::$tempConditions);
        //echo Weather::celsiusToFarenheit(20);
        echo Weather::determineTempCondition(80);

    ?>

</body>
</html>