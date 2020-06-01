<?php

  define('NAME', 'Patrick');

  // $name = "Patrick";
  $age = 20;

  // $name = 'Robert';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  <h1>User Profile Page</h1>

  <div><?php echo NAME; ?></div>
  <div><?php echo $age; ?></div>
</body>
</html>