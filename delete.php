<?php

include ("session.php");

?>

<?php

include "dbcon.php";

$id= $_GET['ram'];         
$a = "DELETE FROM contact WHERE id =$id";
$b = mysqli_query($con,$a);
 header('location:display.php');    