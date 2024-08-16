<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_product.css">
    <title>Document</title>

<?php
     require_once("connection.php");

     if(isset($_POST['add_product'])){
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_FILES['product_image']['name'];
        $product_image_temp_name= $_FILES['product_image']['tmp_name'];     
        $product_image_folder = 'C:/xampp/htdocs/BLACK-GAIN-WEB/img/'.$product_image;

        $insert_query = mysqli_query($conn, "INSERT INTO product (product_name, product_price, product_image) VALUES
        ('$product_name', '$product_price', '$product_image')");

    if ($insert_query) {
        move_uploaded_file($product_image_temp_name, $product_image_folder);
        echo "Product insert success";
        } else {
        echo "Failed to insert product into the database.";
     }   
}
     
?>

</head>
    <h3>Add Product</h3>
<body>
        <form action="" class="add_product" method="POST"  enctype="multipart/form-data">
            <input type="text"  name="product_name" placeholder="product name" class="input_fields" required>
            <input type="number"  name="product_price" min="0" placeholder="Enter product price" class="input_fields" required>
            <input type="file" name="product_image" class="input_fields" required accept="image/png, image/jpg, image/jpeg">
            <input type="submit" name="add_product" class="submit_btn" value="addProduct">


        </form>    
</body>
</html>
