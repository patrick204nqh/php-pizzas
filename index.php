<?php

// connect to database
$conn = mysqli_connect('localhost', 'patrick', 'patrick123456', 'patrick_pizza');

// check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect();
}

// write query for all pizzas
$spl = 'SELECT title, ingredients, id FROM pizzas';

// make query & get result
$result = mysqli_query($conn, $spl);

// fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

// close connection
mysqli_close($conn);

print_r($pizzas);

?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<?php include('templates/footer.php'); ?>

</html>