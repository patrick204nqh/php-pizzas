<?php

  // multi-dimensional arrays

  $blogs = [
    ['title' => 'patrick project', 'author' => 'patrick', 'content' => 'lorem', 'likes' => 20],
    ['title' => 'robert play game', 'author' => 'robert', 'content' => 'lorem', 'likes' => 25],
    ['title' => 'kevin score goal', 'author' => 'kevin', 'content' => 'lorem', 'likes' => 29],
  ];

  // print_r($blogs[1][1]);
  // echo $blogs[2]['author'];
  // echo count($blogs);

  $blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100];

  // print_r($blogs);
  $popped = array_pop($blogs);
  print_r($popped);
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