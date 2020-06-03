<?php

// sessions
if (isset($_POST['submit'])) {
  session_start();

  $_SESSION['name'] = $_POST['name'];

  echo $_SESSION['name'];
  header('Location: index.php');
}


?>

<!DOCTYPE html>
<html>

<head>
  <title>Document</title>
</head>

<body>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="name">
    <input type="submit" value="submit" name="submit">
  </form>
</body>

</html>