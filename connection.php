<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'myaddressbook');

if($con){
	echo "connected";
}else{
	echo "NOT Connected";
}


?>