<?php
  session_start();
  unset($_SESSION["username_session"]);
  unset($_SESSION["password_session"]);

session_destroy(); 

include "header.php";
include "config.php";

$rs=mysqli_query($dbconnect,"select * from pages where ID=4");
$arr=mysqli_fetch_array($rs);

echo stripslashes($arr[3]);


include "footer.php"; 
?>