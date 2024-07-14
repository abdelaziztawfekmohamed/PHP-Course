<?php
    require_once "./data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style= " height:100vh ; display:flex ; flex-direction: column ; align-items:center ; justify-content: center ; margin:0 ">

    <h1> Login </h1>

    <form action="" method="post" style= " display:flex ; flex-direction: column ; gap:20px ">

        <input type="text" placeholder="username" name="username">

        <input type="text" placeholder="password" name="password">

        <button name="submitBTN">login</button>

    </form>

</body>
</html>