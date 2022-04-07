<?php
session_start();
include "dbcon.php";

$ok1 = "";
$ok2 = "";
$ok3 ="";
$ok4 = "";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phoneno'];
$description = $_POST['description'];

$q = "insert into contact(name,email,phone,description)value('$name','$email','$phone','$description')";
$p = mysqli_query($con,$q);
echo "<span style='color:green;'>Message sent successfully..!!</span>";
?>
