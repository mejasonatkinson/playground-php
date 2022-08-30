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
    <h2>Object Oriented PHP #4 - Constructors</h2>

    <?php 

        class User {

        public $username;
        public $email;

        public function __construct($username, $email){
            //$this->username = 'ken';
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend(){
            //return "added a new friend";
            return "$this->username just added a new friend";
        }

        }

        $userOne = new User('mario', 'mario@thenetninja.co.uk');
        $userTwo = new User('luigi', 'luigi@thenetninja.co.uk');

        echo $userOne->username . '<br>';
        echo $userOne->email . '<br>';
        echo $userOne->addFriend() . '<br>';

        echo $userTwo->username . '<br>';
        echo $userTwo->email . '<br>';
        echo $userTwo->addFriend() . '<br>';

    ?>

</body>
</html>