<?php
include "connection.php";
$id=$_GET['ID'];
$q="DELETE FROM `myaddressbook1` WHERE ID= $id ";
mysqli_query($con,$q);
header('location:display.php');





?>