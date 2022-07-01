<?php
session_start();
include "dbcon.php";

// $ok1 = "";
// $ok2 = "";
// $ok3 ="";
// $ok4 = "";

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
// echo $h= $name ,$email,$pass,$gender,$phone;
// echo "<pre>";
// print_r($h);

// die();

$q = "insert into karunya_insert(name,email,password,gender,phone)value('$name','$email','$pass','$gender','$phone')";


$u = mysqli_query($con,$q);
header('location:signin.php');
echo "<h2 style='color:yellow;'>Message sent successfully..!!</h2>";
?>
