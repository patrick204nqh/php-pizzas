<?php

// variable scope

// local vars

function myFunc() {
  $price = 10;
  echo $price;
}

// myFunc();
// echo $price;

function myFuncTwo($age) {
 echo $age;
}

// myFuncTwo(20);
// echo $age;

// global variables

$name = 'patrick';

// function sayHello() {
//   global $name;
//   $name = 'robert';
//   echo "Hello $name";
// }

// sayHello();
// echo $name;

function sayBye(&$name) {
  $name = 'robert';
  echo "bye $name";
}

sayBye($name);
echo $name;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>



</body>
</html>