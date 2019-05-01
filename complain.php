<?php

$servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "police";

$name = $_GET['name'];
$mobile = $_GET['number'];
$add = $_GET['add'];
$my_complain=$_GET['complain'];


 $conn = mysqli_connect($servername, $username, $password, $dbname); 
 if (!$conn){     
 			die("Connection failed: " . mysqli_connect_error()); 
			}

$sql = "INSERT INTO complain(`name`,`number`,`add`,`complain`) VALUES ('$name','$mobile','$add','$my_complain')";

if (mysqli_query($conn,$sql))
 {    
    	
 		echo "<div class='col-md-12 col-lg-12 text-center'> "." <h1> "." Complain Submitted successfully"."</h1>";
 		echo "<a href='index.html' >"."Click Here"."</a>"; 

  
  }

else 
   {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }
mysqli_close($conn);

 ?>