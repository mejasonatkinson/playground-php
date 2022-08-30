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
    <h2>Object Oriented PHP #10 - Clone & Destruct</h2>

    <?php 

        class User {

            public $username;
            protected $email;
            public $role = 'member';

            public function __construct($username, $email){
                //$this->username = 'ken';
                $this->username = $username;
                $this->email = $email;
            }

            public function __destruct(){
                echo "the user $this->username was removed <br>";
            }

            public function __clone(){
                $this->username = $this->username . ' (cloned)';
            }

            public function addFriend(){
                //return "added a new friend";
                return "$this->username just added a new friend";
            }

            public function message(){
                return "$this->email sent a new message";
            }

            // getters
            public function getEmail(){
                return $this->email;
            }

            // setters
            public function setEmail($username){
                if(strpos($username, '@') > -1){
                $this->email = $username;
                };
            }

        }

        class AdminUser extends User {

            public $level;
            public $role = 'admin';

            public function __construct($username, $email, $level){
                parent::__construct($username, $email);
                $this->level = $level; 
            }

            public function message(){
                return "admin $this->email sent a new message";
            }

        }

        $userOne = new User('mario', 'mario@thenetninja.co.uk');
        $userTwo = new User('luigi', 'luigi@thenetninja.co.uk');
        $userThree = new AdminUser('yoshi', 'yoshi@thenetninja.co.uk', 5);

        //unset($userOne);
        $userFour = clone $userOne;
        echo $userFour->username . '<br>';

    ?>

</body>
</html>