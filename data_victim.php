<?php


include 'check_con.php';

session_start();

if(isset($_SESSION['username']))
{

   $user=$_SESSION['username'];

}

else{
	header("location:index.html");
}


 $conn = mysqli_connect($servername, $username, $password, $dbname); 

    $sql="select * from victim";

                $result = mysqli_query($conn,$sql);



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<style type="text/css">
	
	
body{
background:url(images/car.jpg);
padding-bottom: 100px; 
background-attachment:fixed;
background-size:cover;
z-index: 1;
height: 100vh;
}


	.mydata{
		margin-left: 45px;
		max-height: 500px;
		font-size: 1em;
			padding: 15px;
		overflow-y: scroll;
	}
</style>

<body>

<div class=" col-md-12 col-lg-12 container">
					<div class="row ">
					<h1 class="col-md-12 text-center jumbotron">Victim Requests<br>
					<a href="index.html"><input type="button" class="btn btn-primary" value="Home" name="">
					</a></h1>


			<?php
    
                    
                    if ($result->num_rows > 0) {
	                   while ($row = $result->fetch_assoc()) {
			                 $name = $row['name'];
			                 $number = $row['number'];
			                 $address = $row['add'];
			                 $help = $row['help'];

			                
                     
                    ?>

                <div class="col-md-3 mydata col-lg-3 jumbotron" >
						<?php echo "<u>Name</u>: ".$name."<br>";
								echo "<u>Mobile</u>: ".$number."<br>";
								echo "<u>Address</u>: ".$address."<br>";
								echo "<u>Help</u>: ".$help."<br>";

								?>
					</div>
                    <?php   }  } ?>
					

					

				</div>
			</div>		




</body>
</html>