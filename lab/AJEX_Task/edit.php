<?php
if (!isset($_GET['product_id'])) {
    die("Product ID missing!");
}

$id = $_GET['product_id'];
$conn = mysqli_connect("localhost", "root", "", "wpl4(j.query)");

$query = "SELECT * FROM products WHERE id='$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <script src="jquery-3.7.1.js"></script>
</head>
<body>

<h2>Edit Product</h2>

<form id="updateForm">

    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

    <label>Product Name:</label>
    <input type="text" name="product_name"
           value="<?php echo $data['product_name']; ?>"><br><br>

    <label>Product Category:</label>
    <input type="text" name="product_category"
           value="<?php echo $data['product_category']; ?>"><br><br>

    <label>Product Price:</label>
    <input type="text" name="product_price"
           value="<?php echo $data['product_price']; ?>"><br><br>

    <label>Product Quantity:</label>
    <input type="text" name="product_quantity"
           value="<?php echo $data['product_quantity']; ?>"><br><br>

    <button type="submit">Update</button>

</form>

<p id="msg"></p>

<script>
$(document).ready(function () {

    $('#updateForm').submit(function (e) {
        e.preventDefault(); 

        $.ajax({
            type: "POST",
            url: "update.php",
            data: data,
            success: function (response) 
            {
             console.log(responce);

            }
        })
    })

})
</script>

</body>
</html>
