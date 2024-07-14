<?php
declare(strict_types = 1); 
// this declare is applied on the current file only

// function _print_name($first , $last){

//     $firstName = $first;
//     $lastName= $last;

//     echo "my name is $firstName $lastName";

// };

// _print_name( "abdelaziz" , "tawfek" );



// function sum($num1 , $num2)
// {
//     return $num1 + $num2;
// };

// $result = sum(10 , 5);

// echo $result + 14;


//Hoistiong is made by the interpreter for functions 

// _print_name();

// function _print_name()
// {
//     echo 'ahmed';
// }

// var_dump(_print_name());

// x();
// y();

// function x()
// {
//     echo 'this is from x ';
//     function y()
//     {
//         echo 'this is from  y';
//     }
// }

// you cannot name multiple function using the same name cuz 
//unlike variables functions is unique


// // cuz of strict mode 
// function z(): mixed // by default mixed to accept any type of a returned data 
// // optional ?int to accept returned data of type null or int
// {
//     return null;
// }

// var_dump(z());


// //from a clean code perspective you have to determine the type of the parameters and the returned value

// function sum(int $x = 0 , int|float $y = 0.0): int|float
// // to determine the default values of the parameters in case of not passing all the arguments
// // if not determining both of them become required
// // required parameters must be in the beginning
// {
//     return $x + $y;
// }
// echo sum(5, 6, 7);
// //7 will be ignored cuz there's no variable reserved in the function for it
// var_dump(sum());

// function x(&$a , $b){
//     if($a % 2 != 0){
//         $a /= 2;    //a = 3.5
//     }
//     return $a + $b;
// }

// $a = 7;
// $b = 5;

// echo x($a , $b);
// var_dump($a , $b);

// function sum($x , $y , ...$nums){
//     $total = 0;
//     $total = $x + $y;
//     foreach ($nums as $num){
//         $total += $num;
//     }
//     return $total;
// }

// echo sum(5, 6 , 4 , 8);



// function sum($x = 50 , $y){
//     return $x - $y;
// }
// echo sum( y: 10 );

// key usage for named arguments is setcookie built-in function

// another benefit for spread operator
// function sum($x , $y , $z){
//     return $x - $y * $z;
// };
// $arr = ['y' => 100 , 'x' => 20 , 'z' => 2];
// echo sum(...$arr);
// $x = 5;
// require_once "file1.php"; // x =10
// function sum()
// {
//     global $x; // this global assigns by reference
//     $x = 666;
//     echo $x;
// }
// sum(); //x =10
// require_once "file2.php"; //x=100 

// var_dump($x);

// var_dump($GLOBALS);


// static scope 
// function test()
// {
//     static $x = 2;
//     return $x++ ;
// }

// echo test(); //2
// echo test(); //3


// variable function
// function sum(...$nums){
//     echo array_sum($nums);
// }

// function msg(){
//     echo 'try again';
// }

// $x = 'sum';
// $x(1,2,3,4.5,5.4);


// anonymous function => must be ended with ;

// $sum = function($x , $y)
// {
//     echo $x + $y;
// };

// $sum( 1 , 2 );

// $num = 10;
// $b = 80;

// $fn = function (int $x = 5 , int $y = 1) use(&$num , $b) : int //by using use($num) the global value of num is not affected
// {
//     $num += 50;    
//     return $x + $y * $num;
// };

// echo $fn();

// var_dump($num);

// fn(arg) => expression

$arr = [ 1, 2 ,3 ];
// $arrAfterMap = array_map(fn ($elm) => $elm * 2 , $arr);
var_dump($arr);
$arrAfterMap = array_map(
    function ($elm) {
        $r = 10;
        $hasd = 5;
        return $r + $hasd + $elm;
    }, $arr
);
echo $arrAfterMap;
// var_dump($arrAfterMap);
// var_dump($arr);












?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->
