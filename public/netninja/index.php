<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Net Ninja Playground</title>
</head>
<body>
    <h1>Net Ninja Playground</h1>

    https://www.youtube.com/watch?v=LuWxwLk8StM&list=PL4cUxeGkcC9hNpT-yVAYxNWOmxjxL51Hy&index=1

    <ul>
        <li>OOP (Object Oriented Programming) is a coding methodology / style</li>
        <li>makes code more modular and reusable</li>
        <li>makes our code easier to maintain</li>   
        <li>makes it easier to debug</li> 
    </ul>

    <p>course files on <a href="https://github.com/iamshaunjp/object-oriented-php" target="_blank">github.</a></p>

    https://www.youtube.com/watch?v=M38rgWRCVtY&list=PL4cUxeGkcC9hNpT-yVAYxNWOmxjxL51Hy&index=2

    <p>Classes are like blueprints for objects</p>

    <p>For a train:</p>

    <ul>
        Properties {length, colour, top speed}
        Methods (Functions) {accelerator, brake}
    </ul>


    <p>For a user:</p>

    <ul>
        Properties {username, email}
        Methods (Functions) {addFriend, postStatus}
    </ul>


    <p>Each user is an object</p>

    https://www.youtube.com/watch?v=0OOAdIdQvX4&list=PL4cUxeGkcC9hNpT-yVAYxNWOmxjxL51Hy&index=3

    1:51

    <?php 

        class User {
            public $username = 'ryu'; // properity method
            public $email = 'ryu@ryu.com'; // properity method
        }

        $userOne = new User();
        $userTwo = new User();

        echo 'the class is ' . get_class($userOne);

    ?>

</body>
</html>