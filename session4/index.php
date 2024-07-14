<?php 
echo '<h1> session4 </h1>';
// //ternary operator
// $is_loggedIn = true;
// $role_of_user = 'admin';
// if($is_loggedIn === true){
//     echo '<button>logout</button>';
// }else{
//     echo '<button>Login</button>';
// };

// $status = $is_loggedIn === true ? '<button>Logout</button>' : '<button>Login</button>';
// echo $status;

// $status = $is_loggedIn === true ? 
//     (
//         $role_of_user !== 'admin'
//         ?
//         '<button>Logout</button>'
//         :
//         '<button>Logout</button> <button>dashbord</button>'  
//     )

//     : '<button>Login</button>';

// null coalescing ?? enquiring about null only any other value would be returned
// falsy values operator ?:
//falsy values : false, 0 , -0 , 0.0 , -0.0 , null , [] , '0' , ''

// $path = 0; 
// $url= $path ?? '/'; 
// $url2 = $path ?: '/';

// echo $url;
// echo '<br>';
// echo $url2;


// $x = 5;
// echo $x++; //post increment : to return the value first then apply the increment
// echo '<br>';
// echo $x;
// echo '<br>';

// $y = 6;
// echo ++$y; //pre increment : to apply the increment then return the value first 
// echo '<br>';
// echo $y;
// echo '<br>';


// $j = null; // you can't decrement on type null
// echo $j++;
// echo '<br>';
// echo $j;

// $t = 'karim'; // 1251
// echo ++$t; //increment the last letter by the next one respectively , no decrement
// echo '<br>';


// logical operators :  ( and & && ) (or  |  || ) ( xor )
// xor : one true but not both

// && last true and first false
// || first true and last false


// $x = false;
// $y = true;
// $z = false;
// var_dump($x && !$y || $z && false); // && will be applied first

// bitwise & | 

// $x = ['a','b','c'];
// $y = ['d','e','f','g','h'];
// var_dump($x + $y);


// <> this means not equal 

// $x = ['a' => 1 , 'b' => 2];
// $y = ['c' => 1 , 'd' => 2];
// var_dump($x + $y);

// no difference between elseif and else if here in php tag but within html it differs
// if(){

// }elseif(){

// }else if(){

// }
// $finResult = 95;

// $x = 1;
// $y =5 ;
// while($x < 10){
//     echo '<h1> my number is' . $x . '</h1>';
//    $x++;
// };

// while(true == true){
//     while($x < 10){
//         echo $x;
//         $x++;
//         break; // to get out of this while this layer
//         break 2; // to stop both layers
//     }
// }

// while($x !== $y){
//     if($x === 3){
//         $x++;
//         continue;
//     }
//     echo $x;
//     $x++;
// }













?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- <?= $status ?> -->
    <!-- <?php  echo $status ?> -->
    <!-- best practice for ternary operators -->
    <!-- <?= $is_loggedIn === true ? '<button>Logout</button>' : '<button>Login</button>'?> -->

</body>
</html>