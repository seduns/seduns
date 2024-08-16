<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/shop.css">
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
    
        <!-- product section -->
<?php
    require_once('connection.php');

    $display_product = mysqli_query($conn, "SELECT * FROM product");
    if(mysqli_num_rows($display_product) > 0){
        //logic fetch
    }
    while($row = mysqli_fetch_assoc($display_product)){
        

        
    }
        ?>

<div class="content">
    <section id="home">
        <div class="layout one">
            <div class="product_container">
                <div class="box">
                    
                    <div class="product product_1">
                        <div class="image image_1">
                            <div class="name product_1 ">
                                <img src="C:/xampp\htdocs/BLACK-GAIN-WEB/img/<?php echo $row = ['product_image']?>">
                                <a href="../php/blackgain_shirt.html">BUY</a>
                            </div>
                            </div>
                        </div>
                        <div class="product product_2">
                            <div class="image image_2">
                               <div class="name product_1 ">
                                    <a href="#">BUY</a>
                                </div>         
                            </div>
                        </div>
                    </div>
                    <div class="box">
                            
                        <div class="product product_3">
                            <div class="image image_3">
                               <div class="name product_1 ">
                                    <a href="#">BUY</a>
                                </div>              
                            </div>
                        </div>
                        <div class="product product_4">
                            <div class="image image_4">
                               <div class="name product_1 ">
                                    <a href="#">BUY</a>
                                </div>          
                            </div>
                        </div>
                    </div>
                    <div class="box">

                        <div class="product product_3">
                            <div class="image image_5">
                               <div class="name product_1 ">
                                    <a href="#">BUY</a>
                                </div>     
                            </div>
                        </div>
                        <div class="product product_4">
                            <div class="image image_6">
                               <div class="name product_1 ">
                                    <a href="#">BUY</a>
                                </div>  
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>


    <script src ="../js/homepage.js"></script>
        
</body>
</html>