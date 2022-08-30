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
    <h2>Object Oriented PHP #7 - Inheritance</h2>

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

            public function __construct($username, $email, $level){
                parent::__construct($username, $email);
                $this->level = $level; 
            }

        }

        $userOne = new User('mario', 'mario@thenetninja.co.uk');
        $userTwo = new User('luigi', 'luigi@thenetninja.co.uk');
        $userThree = new AdminUser('yoshi', 'yoshi@thenetninja.co.uk', 5);

        echo $userThree->level . '<br>';
        echo $userThree->username . '<br>';
        echo $userThree->getEmail() . '<br>';

    ?>

</body>
</html>