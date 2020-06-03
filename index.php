<?php

// connect to database
$conn = mysqli_connect('localhost', 'patrick', 'patrick123456', 'patrick_pizza');

// check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect();
}

?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<?php include('templates/footer.php'); ?>

</html>