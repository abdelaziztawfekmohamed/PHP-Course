<?php
echo '<h2>session9</h2>';

// any form contain any files must be of type post

var_dump($_POST);
var_dump($_FILES);
// $userCredentials = "";
// $all_errors = [];

// if(isset($_POST['submitBTN'])) {
// $username = $_POST['username'] ;
// $password = $_POST['password'] ;
// $email = $_POST['email'];
// $flag = 0;
// }

if(isset($_POST['submitBTN'])){
    $courses = $_POST['course'];
    $laps = $_POST['lap'];
}

if(isset($_POST['submitBTN'])){
    $myImageAttributes = $_FILES['myImage'];
    $fileName = uniqid() . $myImageAttributes['name'];
    move_uploaded_file($myImageAttributes['tmp_name'] , 'uploads/'.$fileName);
};



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin: 10px">

    <?php if(isset($_POST['submitBTN'])) : ?>
        <?php foreach($myImageAttributes as $key => $attribute) :  ?>
            <?= 'Image '. $key . ' : ' . $attribute . '<br>' ?>
        <?php endforeach ?>
    <?php endif ?>
    <?php if(isset($_POST['submitBTN'])): ?>
        <?= 'username : '. $_POST['username'] . '<br>' ?>
        <?= 'password : '. $_POST['password'] . '<br>' ?>
        <?= 'email    : '. $_POST['email']    . '<br>' ?>
        <?= 'gender   : '. $_POST['gender']   . '<br> <br>' ?>
        <?php foreach($courses as $key => $course) :  ?>
            <?= 'course '. $key + 1 . ' : ' . $course . '<br>' ?>
        <?php endforeach ?>
        <?= '<br>' ?>
        <?php foreach($laps as $key => $lap) :  ?>
            <?= 'lap '. $key + 1 . ' : ' . $lap . '<br>' ?>
        <?php endforeach ?>
        <?= '<br>' ?>
        <?= 'price : '. $_POST['price'] . '<br>' ?>
    <?php endif ?>

    <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="username"  placeholder="username" >

            <input type="password"  name="password" placeholder="password">

            <input type="email" name="email" placeholder="email">

            <input type="color" name="color" >
            <br>
            <input type="radio" name="gender" value="male" id="">male
            <input type="radio" name="gender" value="female" id="">female
            <br>
            <h3>Courses</h3>
            <input type="checkbox" name="course[]" value="html" id="">html
            <input type="checkbox" name="course[]" value="css" id="">css
            <input type="checkbox" name="course[]" value="js" id="">js
            <br>
            <h3>Select Course Lap</h3>
            <select name="lap[]" id="" multiple>
                <option value="101">lap 1</option>
                <option value="102">lap 2</option>
                <option value="103">lap 3</option>
                <option value="104">lap 4</option>
            </select>
            <br><br>
            <input type="file" name="myImage" id="">
            <br><br>
            <input type="range" name="price" id="">
            <br><br>
        <button type="submit" name= "submitBTN">Submit</button>
    </form>

</body>
</html>