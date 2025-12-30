<?php
$conn = mysqli_connect("localhost", "root", "", "wpl4(j.query)");

$id = $_GET['id'];

$query = "DELETE FROM products WHERE id = '$id'";
mysqli_query($conn, $query);

header("Location: view.php"); 
?>
