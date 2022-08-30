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
    <h2>Object Oriented PHP #5 - Access Modifiers</h2>

    <?php 

        class User {

        public $username;
        private $email;

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

        echo $userOne->email;
        echo $userTwo->email;

    ?>

</body>
</html>