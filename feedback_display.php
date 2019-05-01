<?php
$user="login";
include 'check_con.php';

session_start();

if(isset($_SESSION['username']))
{
   $user=$_SESSION['username'];

}


?>


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/style.css">

<style type="text/css">

     body{
        background:lightgreen;
    }

    
*{
	font-family: monospace;
}

h4{
	height: auto;
	width: 100%;
	background:;
	text-align: center;
	padding: 20px;
	border:2px solid black;
	border-radius: 20px;
}

    body{
        background: lightgreen;
    }

    .group{
        border: 2px solid snow;
        border-radius:20px;
        padding:20px;
        margin-bottom: 30px;
    }
    
    .iamuser{
        float: left;
        width:50%;
        
        margin-bottom: 30px;
    }
    
    .feedback{
            margin-top:20px;
        margin-bottom: 30px;
        float:left;
        width: 20%;
        
    }
    .logout{
        margin-top:20px;
        margin-bottom: 30px;
        float:right;
        width: 10%;
    }
    img{
        height: 300px;
        width: 500PX;
    }

  
</style>

</head>
<body>	



<div class="container">
		<div class="row">

 <div class=row>
        <h1 class="jumbotron text-center">Feedback<br></h1>
            <h2 class="iamuser"><?php echo "USER : ".$user; ?></h2>
        
        
        <div class="logout">
            <a href="admin_panel.php"><input type="button" class="button btn btn-danger" value="admin_panel" name="logout"/></a>
        </div> 
            <div class="feedback">
            <a href="feedback.php"><input type="button" class="button btn btn-info" value="feedback" name="logout"/></a>
        </div>    
            
            
        </div>
        

<div class="col-md-12">   
<?php 
	 $conn = mysqli_connect($servername, $username, $password, $dbname); 
    $sql="select * from fb";

	$result=mysqli_query($conn,$sql);


	if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
			$name = $row['name'];
			$fb = $row['fb'];
        echo "<br><h2>Name:".$name."</h2>";
        echo "<h2>Feedback:</h2><h4>".$fb."</h4>    "; 
	}
}
?>


    </div>
    
    
    </div>
    </div>
    


</body>
</html>


