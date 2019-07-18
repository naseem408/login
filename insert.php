<?php

include "connection.php";

if (isset($_POST['done'])){


	$Username = $_POST['Username'];
	$phoneno = $_POST['phoneno'];
	$emailaddress = $_POST['emailaddress'];
	



   
   $q=" INSERT INTO `myaddressbook1`(`Username`, `phoneno`, `emailaddress`) VALUES ('$Username','$phoneno','$emailaddress')";

  $query = mysqli_query($con,$q);



}

?>


<!DOCTYPE.html>
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
	
  
	<div class="col-lg-6 m-auto">
		
		<form method="post"><br><br>
			<div class="card">


				<div class="card-header bg-dark">
					<h1 class="text-white text-center"> Insert operation </h1>
					

				</div><br>
				

				<label> username: </label>
				<input type="text" name="Username" class="form-control"><br>

				<label> phone no: </label>
				<input type="int" name="contact" class="form-control"><br>

				<label> address: </label>
				<input type="text" name="password" class="form-control"><br>

				
				<button class="btn btn-success" type="submit" name="done">Submit </button><br>

			</div>

			

		</form>
		

	</div>
</body>
</html>
