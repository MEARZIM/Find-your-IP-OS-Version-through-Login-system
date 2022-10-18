<?php
include 'databaseConnect.php';
include 'ip.php';


$ip = UserInfo::get_ip();
$os = UserInfo::get_os();
$browser = UserInfo::get_browser();
$device = UserInfo::get_device();


$sql_username= $_POST['username'];
$sql= "INSERT INTO ipdata (Username, IP, OS_Version, Device, Browser, Date_Time) VALUES ('$sql_username','$ip', '$os', '$browser', '$device', NOW())";

if(mysqli_query($conn, $sql)){
    
} 
else{
    echo "ERROR ". mysqli_error($conn);
}


?>