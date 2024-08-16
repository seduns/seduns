

<?php 
    require_once("connection.php");

    $username = $_POST["txtUserName"];
    $password = $_POST["txtPass"];

    $sql = "SELECT user_email, user_pass FROM user WHERE user_email = '$username' AND user_pass = '$password'";
    $query = mysqli_query($conn,$sql);
    $numData  = mysqli_num_rows($query);
    $data = mysqli_fetch_assoc($query);

    if($numData > 0) {
        echo '<script type="text/javascript">',
        'alert("Login Success");',
        'window.location.href = "homepage.php";',
        '</script>';
    }
    else {
        echo '<script type="text/javascript">',
        'alert("Login Failed");',
        'window.location.href = "login.php";',
        '</script>';
    }
    
?>