<?php
include ('connect.php');
session_start();
if(isset($_POST['submit'])){
    $username = $_POST ['username'];
    $password = $_POST ['password'];

    $sql = "SELECT * FROM users where username = '$username' and password = '$password'";
    $response = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($response,MYSQLI_ASSOC);
    $count = mysqli_num_rows($response);
    if($count==1){
        header("Location:mainpage.php");
    }
    else{
        echo `<script>alert("Login Failed.Invalid Username or Password")</script>`  ;
      
    }
}



