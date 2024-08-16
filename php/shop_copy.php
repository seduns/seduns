<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/shop_copy.css">
    <title>Document</title>
    </head>
    <body>
    <div class="container" >
            <div class="nav-bar">
                <ul>
                    <li><div class="logo"></div></li>
                    <li><a href="homepage.php" >home</a></li>
                    <div class="dropdown">
                        <button class="dropbtn">profile</button>
                        <div class="dropdown-content">
                            <a href="#">profile</a>
                            <a href="#">log out</a>     
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <header>

        </header>
    
        <!-- product section -->
         <div class="table_product">

             <?php
    require_once('connection.php');
    
    $display_product = mysqli_query($conn, "SELECT * FROM product");
    if(mysqli_num_rows($display_product) > 0){
        //logic fetch
    }
    while($row = mysqli_fetch_assoc($display_product)){ 
        ?>  



<table>
    <tr>
        <td><?php echo $row['id']?></td>
            <td class="table_image"><img class="image" src="/BLACK-GAIN-WEB/img/<?php echo $row['product_image']?>" style="width: 20vh; height: 30vh;" ></td>
        <td>name</td>
        <td>price</td>
    </tr>
</div>
</table>


<?php
}

?>


    <script src ="../js/homepage.js"></script>
        
</body>
</html>