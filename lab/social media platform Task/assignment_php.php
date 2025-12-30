<?php

// get values safely (no warnings)
$email    = @$_POST['email'];
$password = @$_POST['password'];
$fullname = @$_POST['fullname'];
$username = @$_POST['username'];

$conn = mysqli_connect('localhost', 'root', '', 'wpl');

// simple insert (no if)
$query = "INSERT INTO users (email, password, fullname, username)
          VALUES ('$email', '$password', '$fullname', '$username')";

mysqli_query($conn, $query);


echo "Registration Done";

?>
