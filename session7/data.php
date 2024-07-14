<?php
// echo "<h2>session 7</h2>";
// var_dump($_GET);
// var_dump($_POST);
// $username = $_GET['username'];
// $username = 'abdelaziz';
// $password = $_GET['password'];
// $password = 12345;
// var_dump($_GET['username'] , $_GET['password']);

if( isset($_POST['submitBTN']) ) {
        
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = [
        [ 'username' => 'mohamed' , 'password' => '5050'],
        [ 'username' => 'ahmed' , 'password' => '45060'],
        [ 'username' => 'abdelaziz' , 'password' => '49506'],
        [ 'username' => 'waleed' , 'password' => '2366'],
    ];

    $flag = 0;

    foreach( $users as $user ){
        if( $user['username'] === $username && $user['password'] === $password ) {
            $flag = 1;
            break;
        }
    };

    if( $flag === 1 ){
        header("location:home.php?username=$username&password=$password");
    }else{
        echo '<h1>Try Again!</h1>';
    }
}
?>
