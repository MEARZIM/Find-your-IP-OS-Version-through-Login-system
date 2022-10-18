<?php
include 'databaseConnect.php';

session_start();
if(isset($_POST['username']) and isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
     
    $sql = "select * from info where Username= '$username' and Pass='$password'";
    
    
    $result= mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);
    
    
    
    
    if($count == 1) {
        $_SESSION['verified_user'] = $username;
        header("location: home.php");  
    }
     else {
        echo "Your Login Name or Password is invalid";
    }
}
?>
