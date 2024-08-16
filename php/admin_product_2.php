<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_product.css">
    <title>Document</title>
</head>
<body>
    
<?php
    require_once('connection.php');

    $display_product = mysqli_query($conn, "SELECT * FROM product");
    if(mysqli_num_rows($display_product) > 0){
        //logic fetch
    }
    while($row = mysqli_fetch_assoc($display_product)){
        
        ?>
            
            <div class="table">
                <table>

                <tr>
                    <td>1</td>
                    <td><img src="/BLACK-GAIN-WEB/img/<?php echo $row['product_image']?>" alt=""></td>
                    <td><img src="/BLACK-GAIN-WEB/img/logo.png" ></td>
                    <td><?php echo $row['product_name']?></td>
                    <td><?php echo $row['product_price']?></td>
                    
                </tr>
            </table>
            </div>
<?php
    }

?>
</body>
</html>