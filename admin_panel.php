<?
include 'check_con.php';
session_start();

if(isset($_SESSION['username']) )
{
   $user=$_SESSION['username'];


   if ($user!="admin") {
				header('location:index.	php');
   	
   }
    

}
?>


<html lang="en">

<head>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
	
body{
background:url(images/car.jpg);
padding-bottom: 100px; 
background-attachment:fixed;
background-size:cover;
display:table;
z-index: 1;
height: 100vh;
}

.div1{  
margin-top: 5%;
}

.div1 div{
	margin: 10px;
}
</style>
</head>
<body>

    
    
	<div class="container">
		<div class="col-md-3 col-lg-3"></div>
		<div class="div1 col-md-8">
		<div class="row">
			<h2 class="col-md-12 jumbotron text-center">Admin Panel</h2>
			<br>
					<a href="index.html"><input type="button" class="btn btn-primary" value="Home" name="">
					</a>
					<a href="feedback_display.php"><input type="button" class="btn btn-primary" value="feedback" name="">
					</a>
		</div>
		<div class="row">
				<a href="data_officer.php"><div class="col-md-5 col-lg-5 col-xs-5 jumbotron text-center">Police Officers Info</div></a>
				<a href="data_complain.php"><div class="col-md-5 col-lg-5 col-xs-5 jumbotron text-center">Complain Box</div></a>
				<a href="data_victim.php"><div class="col-md-5 col-lg-5 col-xs-5 jumbotron text-center">Victims Requests</div></a>
				<a href="logout.php"><div class="col-md-5 col-lg-5 col-xs-5 jumbotron text-center">Logout</div></a>
		</div>			
		</div>
	</div>
</body>
</html>