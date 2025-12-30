<?php
$conn = mysqli_connect("localhost", "root", "", "wpl4(j.query)");

if (!$conn) {
    echo json_encode([
        "code" => 500,
        "msg" => "Database connection failed"
    ]);
    exit;
}

$id = $_POST['id'];
$product_name = $_POST['product_name'];
$product_category = $_POST['product_category'];
$product_price = $_POST['product_price'];
$product_quantity = $_POST['product_quantity'];

$query = "UPDATE products SET
            product_name = '$product_name',
            product_category = '$product_category',
            product_price = '$product_price',
            product_quantity = '$product_quantity'
          WHERE id = '$id'";

if (mysqli_query($conn, $query)) {
    echo json_encode([
        "code" => 200,
        "msg" => "Product Updated Successfully"
    ]);
} else {
    echo json_encode([
        "code" => 500,
        "msg" => "Update Failed"
    ]);
}
?>
