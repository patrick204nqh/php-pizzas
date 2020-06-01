<?php

  // indexed arrays

  $peopleOne = ['patrick', 'robert', 'kevin'];
  // echo $peopleOne[1];

  $peopleTwo = array('kai', 'steven');
  // echo $peopleTwo[1];

  $ages = [20, 30, 40, 50];
  // print_r($age);

  $ages[1] = 25;
  // print_r($ages);

  $ages[] = 60;
  // print_r($ages);

  array_push($ages, 70);
  // print_r($ages);

  // echo count($ages);

  $peopleThree = array_merge($peopleOne, $peopleTwo);
  // print_r($peopleThree);

  // associative arrays (key $ value pairs)

  $devOne = ['patrick' => 'blue', 'kevin' => 'green', 'robert' => 'yellow'];
  // echo $devOne['kevin'];
  // print_r($devOne);

  $devTwo = array('kai' => 'red', 'steven' => 'yellow');
  // print_r($devTwo);

  $devTwo['steven'] = 'pink';
  // print_r($devTwo);

  // echo count($devOne);

  $devThree = array_merge($devOne, $devTwo);
  // print_r($devThree);
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