<?php

// //juggling or casting int

// $x= true;
// echo $x;
// echo"<br>";

// $y = (int)false;
// echo $y;
// echo"<br>";

// $z = (int) 5.96;
// echo $z;
// echo"<br>";

// $q = (int) '6.96';
// echo $q;
// var_dump(is_int($q));
// echo"<br>";

// $e = (int) '55h.96';
// echo $e;
// echo"<br>";

// $t = (int) 'h55.96';
// echo $t;
// echo"<br>";

// $u = (int) null;
// echo "int value for null is ".$u;
// echo "<br>";

// $o = 5.65;
// echo $o;
// var_dump(is_int($o));
// echo"<br>";

// //never trust float number, we expected 8 but the result is 7
// echo floor((0.7+0.1)*10);
// echo"<br>";

// echo ceil(5.3);
// echo"<br>";

// $p = (float) 55;  // 55 become 55.00 so it is not integer anymore.
// echo"the float value of 55 is ".$p;
// var_dump(is_int($p));
// echo"<br";

// // any stirng is indexed 
// $name = 'ahmed';
// echo $name[0];
// echo $name[-1];
// echo $name[2];

// //the multi spaces are considered as one space
// // $name variable inside the double quote is considered as a variable but in single quote considered as a normal string
// $text = 'lkdncnajmcalknjnvn jvnsdoncmjaincjdjdvn;nvonaa xjk ancpnn vkcns;mncasm;cflam;lc
// asklnfasnifmsl;fmc;asm;fmna;ads
// ds kvbajsbckjb cjkbdkcb aobca


// djbnakbcajbdbnncdincjkbca';
// echo $text;

// //another way for multi line
// $x = 'sayed';
// $y= 50;

// $paragraph = <<<senior

// this is new paragraph'
// from ahmed $x "d dlsaknsnvjdfka nvan lofjd'fsajkjanoncfia'kajcaj bkjcnda
// '<h1>$x</h1>'
// """""""""""""""""""""""""""""""""""""""""""""""""""""""""""";
// senior;
// echo $paragraph;


// //   array is defined as a variable of multi values of multi dataTypes

// $arr =['php',50 , 55.55 , '55.5',true];

// //we cannot echo an array yet we can only echo by accessing a non-array element inside it

// $progLang1 = 'php';
// $progLang2 = 'python';
// $progLang3='js';

// $allProgLangs = ['php','python','js'];
// $allProgLangs = array('php2','python2','js2');
// $allProgLangs2 = array('php3','python3','js3');



// // to add an element inside an array 
// $allProgLangs[] = 'css';
// //& to assign by reference
// array_push($allProgLangs,'kotlin','html');
// array_push($allProgLangs,$allProgLangs2);


// //to calculate the length of an array

// $arrCount = count($allProgLangs);
// echo 'the length of this array is '.$arrCount;
// echo '<br>';



// // you cannot call any element of an array by arr_name[negative value] this is only in strings

// echo $allProgLangs[1];
// echo '<br>';
// echo $allProgLangs[1][1];

// // method to make sure that what you are enquiring about is existed

// var_dump(isset($allProgLangs[20]));
// var_dump(isset($x));


// var_dump($allProgLangs);

// echo'<pre>';
// print_r($allProgLangs);
// echo '</pre>';


// // associative array => key(index)=> value
// $arr =[0 => 'php',1 => 'python',2 => 'js']; 
// // the default form of an associative array
// $arr = ['php','python','js'];
// var_dump($arr);


// $langs = ['php','ruby','java'];
// $frams = ['laravel','rails','spring'];

// $langsAndFramework = ['php' => 'laravel','ruby' => 'rails', 'java' => 'spring']; 

// echo $langsAndFramework['php'];

// $langsAndFramework['JS']='React';

// $langsAndFramework[10] = 55;
// $langsAndFramework[] = 5500;


// var_dump($langsAndFramework);

//// multi dimentional array
// $classes = [
//     ['a','b','c'],
//     ['d','e','f'],
//     ['g','h','i'],
// ];
// echo $classes[1][2];
// echo '<br>';
// echo $classes[1][1];
// echo '<br>';

//// multi dimentional associative array

// $products = [
//     'clothes' => [
//         ['name' => 'x' , 'price'=>55 , 'date'=>'date 1'],
//         ['name' => 'y' , 'price'=>100 , 'date'=>'date 2'],
//     ],
//     'food'=>[
//         ['x', 55, 'date 1'],
//         ['y', 100, 'date 2'],
//     ]
// ];
// echo $products['clothes'][0]['name'];
// echo '<br>';
// echo $products['food'][0][0];


// $arr = [
//     true => 'sayed' ,
//     null => 'ahmed',
//     false => 'zizo',
//     1 => '1',
//     '1' => 'string 1',
// ];

// echo $arr[''];
// echo '<br>';
// echo $arr[0];
// echo '<br>';
// echo $arr[true];

// // to elemenate the latest element of an array

// // $r = array_pop($arr);

// // reindex array => array shift
// $r = array_shift($arr);

// //to not reindex array => array unset


// var_dump($arr, $r);


// $arr = ['a' => 'ahmed', 'b' => null];
// // array_key_exist checks only for the key if it is there or not
// var_dump(array_key_exists('b',$arr));
// // isset if key exists and value is null so it returns false 
// var_dump(isset($arr['b']));


// // unary operators + -

// $x= -'10ahmed';
// var_dump($x);


// //assignment operators = += -+ /+
// $x = 10;
// $x = $y = 10;

// $x = ($y  = 10) + 5;

// echo $x.$y;


// // string operator 'concatination' .

// $x = 'ahmed' . ' sayed';
// $x .= ' and my age is 20';
// var_dump($x);


// // comparison operators == === != !== < > <= => <=>

// var_dump(100 <=> 580);
// var_dump(100 <=> 58);
// var_dump(580 <=> 580);

// //  <    =    >
// // -1    0    1

// ternary operator

































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
</html>