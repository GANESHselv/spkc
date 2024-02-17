<?php

$valid_username = "admin";
$valid_password = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = $_POST["username"];
    $password = $_POST["password"];


    if ($username === $valid_username && $password === $valid_password) {
      
        header("Location: dashboard.php");
        exit;
    } else {
       
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>
