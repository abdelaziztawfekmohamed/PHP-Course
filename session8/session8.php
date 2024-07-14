<?php

echo "<h2>session 8</h2>";

// if(isset($username)) {
//     if(!empty($username)) {
//         if(strlen($username) >= 3) {
//             if(preg_match("/senior$/", $username)) {
//                 echo $username;
//             } else {
//                 echo "error you must end with senior";
//             }
//         } else {
//             echo "error you must enter username more than 2 characters";
//         }
//     } else {
//         echo "error you must enter username";
//     }
// }


var_dump($_POST);
$userCredentials = "";
$all_errors = [];

if(isset($_POST['submitBTN'])) {
$username = $_POST['username'] ;
$password = $_POST['password'] ;
$email = $_POST['email'];
$flag = 0;

// *************************************** username check start ******************************************************************
    if(empty($username)) {
        $all_errors['username_empty'] = "error you must enter username <br>";
    } else {
        $flag++;
    }
    if(strlen($username) < 3) {
        $all_errors['username_length'] = "error username must be more than 2 characters <br>";
    } else {
        $flag++;
    }
    if(! preg_match("/senior$/", $username)) {
        $all_errors['username_senior'] = "error your username must end with senior <br>";
    } else {
        $flag++;
    }
// *************************************** username check end ******************************************************************


// *************************************** password check start ******************************************************************
    if(empty($password)) {
        $all_errors['password_empty'] = "error you must enter password <br>";
    } else {
        $flag++;
    }
    if(strlen($password) < 8) {
        $all_errors['password_length'] = "error password must be more than 2 characters <br>";
    } else {
        $flag++;
    }
    if(! preg_match("@[A-Za-z]@", $password)) {
        $all_errors['password_reg'] = "error password must contain Capital letter <br>";
    } else {
        $flag++;
    }
// *************************************** password check end ******************************************************************


// *************************************** email check start ******************************************************************
    if(empty($email)) {
        $all_errors['email_empty'] = "error you must enter email <br>";
    } else {
        $flag++;
    }
    if(! preg_match("/^[a-zA-Z0-9._%+-]+@(yahoo|gmail|hotmail)\.com$/", $email)) {
        $all_errors['email_reg'] = "error your email must end with .com and must be @yahoo or @gmail or @hotmail <br>";
    } else {
        $flag++;
    }
// *************************************** email check end ******************************************************************


    if($flag === 8) {
        $userCredentials = "username : $username <br>" . " password : $password <br>" . "email : $email <br>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charactersset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

</head>
<body>
    <?php foreach($all_errors as $error) :  ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php endforeach ?>
    <?php if($userCredentials !== "") : ?>
        <div class="alert alert-danger">
                <p>Your Credentials</p>
                <?= $userCredentials ?>
        </div>
    <?php endif ?>
    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleInputUsername" class="form-label">Username</label>
            <input type="text" class="form-control" id="exampleInputUsername" name="username" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <button type="submit" class="btn btn-primary" name= "submitBTN">Login</button>
    </form>
</body>
</html>