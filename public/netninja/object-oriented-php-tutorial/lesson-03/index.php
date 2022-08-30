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
    <h2>Object Oriented PHP #3 - Properties & Methods</h2>

    <?php 

        class User {

        public $username = 'ryu';
        public $email = 'ryu@thenetninja.co.uk';

        public function addFriend(){
            //return "added a new friend";
            return "$this->username just added a new friend";
        }

        }

        $userOne = new User();
        $userTwo = new User();

        echo $userOne->username . '<br>';
        echo $userOne->email . '<br>';
        echo $userOne->addFriend() . '<br>';

        $userTwo->username = 'yoshi';
        $userTwo->email = 'yoshi@thenetninja.co.uk';

        echo $userTwo->username . '<br>';
        echo $userTwo->email . '<br>';

        //print_r(get_class_vars('User'));
        print_r(get_class_methods('User'));


    ?>

</body>
</html>