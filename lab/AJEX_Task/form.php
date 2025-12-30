<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }
        .form-container{
            width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label{
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }
        input{
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        button{
            margin-top: 20px;
            padding: 10px 20px;
            background: #0d6efd;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover{
            background: #084298;
        }
    </style>
</head>
<script src="jquery-3.7.1.js"></script>
<body>

<div class="form-container">
    <form>
             
        <label>Product Name</label>
        <input type="text" id='product_name' name="product_name" placeholder="Enter product name">

        <label>Product Category</label>
        <input type="text" name="product_category" id="product_category" placeholder="Enter product category">

        <label>Product Price</label>
        <input type="number" name="product_price" id="product_price" placeholder="Enter product price">

        <label>Product Quantity</label>
        <input type="number" name="product_quantity" id="product_quantity" placeholder="Enter product quantity">

        <button type="button" id='submitButton' name="submit">Submit</button>

    </form>
</div>

</body>
<script>
    $(document).ready(function(){
        $('#submitButton').click(function(){
            let data = {
                'product_name': $('#product_name').val(),
                'product_category': $('#product_category').val(),
                'product_price': $('#product_price').val(),
                'product_quantity': $('#product_quantity').val(),
            }
        console.log(data);
        $.ajax({
        type: 'POST',
        URL: 'formSubmit.php',
        data: data,
        success:function(responce)
        {
            console.log(responce);
        }
        })
        })
      
    })      
            
</script>
</html>