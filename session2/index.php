<?php


echo phpversion();

echo "<br>";
echo "<h1>abdelaziz tawfek</h1>" , "<span>15</span>";
echo '<h1>abdelaziz tawfek</h1>';



$myName = " zizo10";

$var2 = " 55";

echo " $myName dsjnfjsn $var2 ";
echo "<br>";
echo ' $myName dsjnfjsn ' . $myName . 'fdsg' . $var2;
echo "<br>";



echo "my name is $myName and my age is $var2";

echo ' my name is ' . $myName . ' and my age is ' . $var2;
echo "<br>";

// variable names are case sensetive
// you can not name any name after a reserved word

//php is loosely typed language

//assigned by value "php by default"

$x = 50;

$y = &$x;
//& to assign by reference

$x = 200;

echo $y;
echo $x;

// y didn't change cuz php is assigned by value not by reference
echo "<br>";
$firstName = "ahmed";
echo "<br>";
$lastName = "sayed";

echo "<br>";


echo $firstName;
echo '$firstName';
echo "$firstName";
echo 'my name is $firstName $lastName';
echo "my name is $firstName $lastName";
echo " my name is {$firstName} {$lastName}";
echo 'my name is {$firstName} {$lastName}';

echo "<br>";

//comments type 
//single line 
//multi line /* */ 

//docBlock
/**
 * 
 * 
 * 
 * 
 * 
 * 
 */


// constant defined and assigned to value in the same line
// predefined const
echo "<br>";
//magic const ex. _DIR
echo "<br>";
echo __DIR__;

$name;
$name = 'mohamed';
$name = 'ahmed';
echo $name;

echo "<br>";
// best practice to name any constant in Capital letters
define("DATABASENAME",$firstName);



function test(){
    //to call the variable from the global scope
    global $firstName;
    echo $firstName;
    echo DATABASENAME;
};

test();

echo "<br>";

$x = 'name';
$$x = "6565";


echo "$$x";

echo "my name is {$$x}";

var_dump($$x);
// soft debug

// var dump();
//ex like console.log in JS
// print-r();


$isConnected = true;
$isOffline =false;

var_dump($isConnected);
echo '<br>';
var_dump($isOffline);

print_r($isConnected);
print_r($isOffline); // value false when printed its value is empty string

$test = '0';

//falsy values false, 0 , -0 , 0.0 , -0.0 , null , [] , '0' , ''
echo "<br>";
if($test == true){
    echo"this is truthy value";
}else{
    echo "this is falsy value";
}

echo PHP_INT_MAX;
echo PHP_INT_MIN;







?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Lorem ipsum, dolor sit amet .</p>
    <?php 
    echo "<span>abdelaziz </span>" . "this is concat";
     ?>
    <?php
     print "<h3>abdelaziz from print</h3>";
      ?>
    <?php
     echo 'ahmed\'s car';
    
      ?>

      <h1><?php echo $firstName; ?></h1>
      <h1><?= $lastName?></h1>
</body>
</html>