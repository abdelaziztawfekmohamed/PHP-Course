<?php 

$userCredentials = [];
$all_errors = [];

if(isset($_POST['submitBTN'])) {
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $courses = $_POST['course'];
    $laps = $_POST['lap'];
    $myImage = $_FILES['myImage'];
    $fileName = uniqid() . $myImage['name'];
    $flag = 0;

// *************************************** username check start ******************************************************************
    if(empty($username)) {
        $all_errors['username_empty'] = "error you must enter username <br>";
    } else {
        $flag++;
    }
    if(strlen($username) < 3) {
        $all_errors['username_length'] = "error username must be more than 3 characters <br>";
    } else {
        $flag++;
    }
    if(! preg_match("/^[A-Z][a-zA-Z]*$/", $username)) {
        $all_errors['username_senior'] = "error your username must start with an uppercase letter and it can not contain any numbers or special characters <br>";
    } else {
        $flag++;
    }
    if($flag === 3){
        $userCredentials['username'] = $username;
    }
// *************************************** username check end ******************************************************************


// *************************************** password check start ******************************************************************
    if(empty($password)) {
        $all_errors['password_empty'] = "error you must enter password <br>";
    } else {
        $flag++;
    }
    if(strlen($password) < 8) {
        $all_errors['password_length'] = "error password must be more than 8 characters <br>";
    } else {
        $flag++;
    }
    if(! preg_match("/^(?=.*[A-Z])(?=.*[\d\W])[^ ]+$/", $password)) {
        $all_errors['password_reg'] = "error password must contain at least one uppercase letter and at least one number or special character and it must not contain any spaces. <br>";
    } else {
        $flag++;
    }
    if($flag === 6){
        $userCredentials['password'] = $password;
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
    if($flag === 8){
        $userCredentials['email'] = $email;
    }
// *************************************** email check end ******************************************************************


// *************************************** gender check start ******************************************************************
    if(empty($gender)){
        $all_errors['gender_empty'] = "error you must select your gender <br>";
    }else {
        $flag++;
        $userCredentials['gender'] = $gender;
    }
// *************************************** gender check end ******************************************************************


// *************************************** courses check start ******************************************************************
    if(empty($courses)){
        $all_errors['course_empty'] = "error you must select your course <br>";
    }else {
        $flag++;
        $userCredentials['courses'] = $courses;
    }
// *************************************** courses check end ******************************************************************


// *************************************** course lap check start ******************************************************************
    if(empty($laps)){
        $all_errors['lap_empty'] = "error you must select your course lap <br>";
    }else {
        $flag++;
        $userCredentials['laps'] = $laps;
    }
// *************************************** course lap check end ******************************************************************


// *************************************** image check start ******************************************************************
    if(empty($myImage)){
        $all_errors['image_empty'] = "error you must select an image <br>";
    }else {
        $flag++;
        $userCredentials['myImage'] = $myImage;
    }
// *************************************** image check end ******************************************************************
    // var_dump($userCredentials);
}



?>