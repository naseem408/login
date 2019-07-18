<?php

include "connection.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<form>
		Username:<input type="text" name="username" value=""><br><br><br>
		Password:<input type="password" name="password" value=""><br><br><br>
		<br><br><br><br><br><br><input type="submit" name="submit" value="login">
</form>

</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$user=$_POST['username'];
	$password=$_POST['password'];
	$query="SELECT * FROM `myaddressbook1` WHERE username='$user'&& password='$password'"
	$data= mysqli_query($connction,$query);
	$total= mysqi_num_rows($data);
	if($total==1){
		echo "Login OK";

	}
	else{
		echo "Login Faild";
	}



}





?>