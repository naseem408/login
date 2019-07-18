<?php

include "connection.php";

if (isset($_POST['done'])){


  $Username = $_POST['Username'];
  $phoneno = $_POST['phoneno'];
  $emailaddress = $_POST['emailaddress'];
  



   
   $q=" SELECT * FROM `myaddressbook1`";

  $query = mysqli_query($con,$q);



}

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
</head>
<body>
	<div class="container">
		<div class="coll-lg-12">
			
         <h1 class="text-warning text-center">Display Data</h1>
      <table class="table lable-striped table-hover table-bordered">
        <tr class="bg-dark text-white text-center">
         	<th>ID</th>
         	<th>usaername</th>
         	<th>phoneno</th>
         	<th>address</th>
         	<th>Delete</th>
         	<th>Update</th>
         	
        </tr>
     <?php

         




	
	   $q=" SELECT * FROM `myaddressbook1`";
       $query = mysqli_query($con,$q);
       while ($res=mysqli_fetch_array($query)) {
       	
     

     ?>
        <tr >
        	<td><?php echo $res['ID']; ?></td>
         	<td><?php echo $res['Username']; ?></td>
         	<td><?php echo $res['phoneno']; ?></td>
         	<td><?php echo $res['emailaddress']; ?></td>
         	<td><button class="btn-danger btn"><a href="delete.php?ID=<?php echo $res['ID']; ?>" class="text-white">Delete</a></button></td>
         	<td><button class="btn-primary btn"><a href="update.php?ID=<?php echo $res['ID']; ?>" class="text-white">Update</a></button></td>




        </tr>
        <?php
          }

        ?>

      </table>




		</div>
		


	</div>

</body>
</html>