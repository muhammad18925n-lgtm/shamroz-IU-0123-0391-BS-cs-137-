<?php
$con = mysqli_connect('localhost', 'root', '', 'wpl4(j.query)');
print_r($_REQUEST);

$product_name = $_POST['product_name']
$product_category = $_POST['product_category']
$product_price = $_POST['product_price']
$product_quantity = $_POST['product_quantity']

$query = "INSERT INTO products(product_name, product_category, product_price, product_quantity)
values('$product_name', '$product_category', '$product_price', '$product_quantity')";

if (mysqli_query($conn, $query)){
    $responce['msg'] = "Data Inserted Successfully";
    $responce['code'] = "200";
    $responce['code'] = "201";
    echo json_encode($responce);
}
else {
    $responce['msg'] = "Something Went Wrong";
    $responce['code'] = "500";
    echo json_encode($responce);

}

