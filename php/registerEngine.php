<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINI LIBRARY</title>

    <?php       
        require_once("connect.php")
    ?>


</head>
<body>

    <?php
    
    $name =$_POST["txtName"];
    $phone =$_POST["txtPhone"];
    $email =$_POST["txtEmail"];
    $pass =$_POST["txtPass"];
    

    $sql = "INSERT INTO user (user_name, user_phone, email, pass) VALUE ('$name', '$phone', '$email', '$pass')";    
    $query = mysqli_query($conn,$sql) or die; 

    if($query)
        echo "success";
    

    ?>
</body>
</html>