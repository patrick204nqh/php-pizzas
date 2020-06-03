<?php

// connect to database
$conn = mysqli_connect('localhost', 'patrick', 'patrick123456', 'patrick_pizza');

// check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect();
}
