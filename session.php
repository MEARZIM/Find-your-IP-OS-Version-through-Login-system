<?php
include 'databaseConnect.php';

    session_start();
    
    $user = $_SESSION['verified_user'];
    $ses_sql = "select username from info where Username = '$user'";
    $ses_res = mysqli_query($conn,$ses_sql);

    $row = mysqli_fetch_array($ses_res);
    $get_session = $row['username'];
    //echo $get_session;

?>
