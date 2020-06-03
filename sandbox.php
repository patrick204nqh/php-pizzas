<?php

// sessions
if (isset($_POST['submit'])) {

  // cookie for gender
  setcookie('gender', $_POST['gender'], time() + 86400);

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
    <select name="gender">
      <option value="male">male</option>
      <option value="female">female</option>
    </select>
    <input type="submit" value="submit" name="submit">
  </form>
</body>

</html>