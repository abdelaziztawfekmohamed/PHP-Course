<?php
echo '<h1>session 5</h1>' . '<br>';

// $txt = 'abdelaziz';

// $arr = ['a' , 'b' , 'c' , 'd'];

// for ($i = 0 ; $i < strlen($txt) ; $i++){
//     echo "<h1> num is $txt[$i] </h1>";
// }

// $length = count($arr);

// for ($i = 0 ; $i < $length  ; $i++){
//     echo "<h1> num is $arr[$i] </h1>";
// }

$progLangs = [ 'lang1' => 'java' , 1 , 'lang2' => 'c' , 100 , 'lang3' => 'php' , null ];

foreach( $progLangs as $key => $lang ) {
    echo "<h1> $key => $lang </h1>";
    
};
echo $progLangs['lang1'];

// $user = [
//     'name'  => 'abdelaziz tawfek',
//     'email' => 'abdelaziztawfek@gmail.com',
//     'skills' => ['js','css','html']
// ];

// foreach( $user as $key => $element ) {
//     if($key === 'skills'){
//         foreach($element as $k => $lang){
//             echo "<h2> skill $k => $lang </h2>";
//         }
//     }else{
//         echo "<h1> $key => $element </h1>";
//     }
// };

// we needed another foreach because of the array to string conversion error

// $user = [
//     'name'  => 'abdelaziz tawfek',
//     'email' => 'abdelaziztawfek@gmail.com',
//     'skills' => [ 'js', 'css', 'html']
// ];

// foreach( $user as $key => $element ) {
//     if(is_array($element)){
//         foreach($element as $k => $lang){
//             echo "<h2> $k => $lang </h2>";
//         }
//     } else{
//         echo "<h1> $key => $element </h1>";
//     }
// };

// $todayIs = 'sat';

// switch($todayIs){

//     case 'sat' :
//     case 'fri' :
//         echo 'Day Off';
//         break;
//     case 'sun' :
//     case 'mon' :
//         echo 'W. day';
//         break;
//     default :
//         echo 'plz check the proper day';
// }


// match
// Key Features of match and its key differences with switch
// Expression, Not a Statement: match returns a value 
// and can be used in expressions.
// This contrasts with switch, which is a statement 
// and does not return a value directly.

// Strict Comparison: match uses strict comparison (===),
// ensuring both value and type must match. 
// This is different from switch, which uses loose comparison (==).

// Single-line Return: Each match arm is a single expression,
// which makes the syntax concise.

// No Fall-through: match does not allow fall-through between cases. Each arm must be a single expression and there is no need for break statements.

// Default Case: Unlike switch, the match expression does not
// require a default case. If no match is found
// and no default is provided, an UnhandledMatchError is thrown.

// $color = 'green';

// $result = match ($color) {
//     'red' => 'Stop',
//     'yellow' => 'Caution',
//     'green' => 'Go',
//     default => 'Unknown color',
// };

// echo $result;  // Outputs: Go

// $todayNum = 1;
// $result = match ($todayNum) {
//     0,1 =>'dayOff' ,
//     2,3,4,5 => 'w.Days' ,
// };






























?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session5</title>
</head>
<body>
    <!-- <?php for( $i = 0 ,  print $i  ; $i <= 5 ; $i++ ) : ?> 
        <h1>abdelaziz <?= $i ?></h1>
    <?php endfor ?> -->
    <!-- the first part of the condition executes only once -->
    
</body>
</html>