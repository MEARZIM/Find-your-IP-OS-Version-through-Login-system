<?php
include 'databaseConnect.php';



if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['fname']) and isset($_POST['lname'])) {
   # code...
   $firstname = $_POST['fname'];
   $lastname = $_POST['lname'];

   $username = $_POST['username'];
   $password = $_POST['password'];

   $Phonenumber = $_POST['Contactno'];

   // unique username
   error_reporting(0);
   $database_sql = "select username from info where Username = '$username'";
   $database_res = mysqli_query($conn,$database_sql);

   $row = mysqli_fetch_array($database_res);
   $get_userby_database = $row['username'];

   
   if ($get_userby_database === $username) {
      header("location: error_handling/registratonError.html");
   }
   else{
      $sql= "INSERT INTO info (sl, FirstName, LastName, Username, Pass, ContactNumber) VALUES (' ','$firstname', '$lastname', '$username', '$password', '$Phonenumber')";
      
      if(mysqli_query($conn, $sql)){
         header("location: registerHTML/index.html");
         include 'Userip.php';
      } 
      else{
         echo "ERROR ". mysqli_error($conn);
      }
      
   }

}



?>