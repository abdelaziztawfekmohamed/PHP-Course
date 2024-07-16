<?php

echo '<h2>session 9 task</h2>';
// var_dump($_POST);
// var_dump($_FILES);
require_once('./check.php');

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
<body style="margin: 10px">
    <?php foreach($all_errors as $error) :  ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php endforeach ?>
    <?php if(!empty($userCredentials)) : ?>
        <div class="alert alert-danger">
            <h3>Your Credentials :</h3>
            <?php foreach($userCredentials as $key => $userCredential): ?>
                <?php if(is_array($userCredential)): ?>
                        <?php if($key === 'courses') : ?>
                                <h5>Registered Courses</h5>
                                <?php foreach($userCredential as $k1 => $element) : ?>
                                    <?= 'course '. $k1 + 1 . ' : ' . $element . '<br>' ?>
                                <?php endforeach ?>
                                <br>
                            <?php elseif($key === 'laps'):?>
                                <h5>Registered Course Laps</h5>
                                <?php foreach($laps as $k2 => $lap) :  ?>
                                    <?= 'lap '. $k2 + 1 . ' : ' . $lap . '<br>' ?>
                                <?php endforeach ?>
                                <br>          
                            <?php elseif($key === 'myImage') : ?>
                                <h5>Image Details</h5>
                                    <?php foreach($myImage as $k3 => $attribute) :  ?>
                                        <?= 'Image '. $k3 . ' : ' . $attribute . '<br>' ?>
                                    <?php endforeach ?>
                        <?php endif ?>
                    <?php else :?>
                        <?= $key . ' : ' . $userCredential . '<br><br>' ?>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    <?php endif ?>

    <form action="" method="post" enctype="multipart/form-data">
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

        <div class="mb-3">
            <input type="color" name="color" >
        </div>
        
        <h4>Gender</h4>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="male" id="gender">
            <label class="form-check-label" for="gender">
                male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="female" id="gender">
            <label class="form-check-label" for="gender">
                female
            </label>
        </div>
        <br>

        <h4>Courses</h4>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="course[]" value="HTML" id="course[]">
            <label class="form-check-label" for="course[]">
                HTML
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="course[]" value="CSS" id="course[]">
            <label class="form-check-label" for="course[]">
                CSS
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="course[]" value="JS" id="course[]">
            <label class="form-check-label" for="course[]">
                JS
            </label>
        </div>
        <br>

        <h4>Select Course Lab</h4>
        <select class="form-select" name="lap[]" multiple>
                <option value="101">lap 1</option>
                <option value="102">lap 2</option>
                <option value="103">lap 3</option>
                <option value="104">lap 4</option>
        </select>
        <br>

        <div class="input-group">
            <input type="file" class="form-control" name="myImage">
        </div>
        <br>

        <button type="submit" class="btn btn-primary" name= "submitBTN">Login</button>
    </form>
</body>
</html>