
<?php 

require('user_validator.php');

$errors = [];

if(isset($_POST['submit'])){
  // validate entries
  $validation = new UserValidator($_POST);
  $errors = $validation->validateForm();

  // if errors is empty --> save data to db
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Net Ninja Playground</title>
    <link rel="stylesheet" href="../../../reset-style.css">
    <style>
        body{
            background: #ffece5;
            font-family: verdana;
        }
        .new-user{
            background: #fff;
            padding: 20px 40px;
            max-width: 300px;
            margin: 0 auto;
        }
        h2{
            color: #555;
        }
        label,input{
            display: block;
            margin: 18px 0;
        }
        label{
            color: #777;
        }
        input[type='text'],
        input[type='email']{
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 10px;
            width: 100%;
        }
        input[type='submit']{
            margin: 24px auto;
            font-size: 18px;
            background: coral;
            color: #fff;
            padding: 6px 16px;
            border: none;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>Net Ninja Playground</h1>
    <h2>Object Oriented PHP #12 - Validation Class (part 3)</h2>

    <div class="new-user">
        <h2>Create a new user</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

        <label>username: </label>
        <input type="text" name="username">

        <label>email: </label>
        <input type="text" name="email">

        <input type="submit" value="submit" name="submit">

        </form>
    </div>

</body>
</html>