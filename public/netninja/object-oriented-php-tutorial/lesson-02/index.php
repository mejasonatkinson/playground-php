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
    <h2>Object Oriented PHP #2 - Intro to Classes</h2>

    <?php 

        class User {

        }

        $userOne = new User();
        $userTwo = new User();

        echo 'the class is: ' . get_class($userOne);

    ?>


</body>
</html>