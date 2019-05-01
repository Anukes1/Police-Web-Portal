<?php

$servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "police";

$name=$_GET['name'];
$email=$_GET['email'];
$fb=$_GET['fb'];


 $conn = mysqli_connect($servername, $username, $password, $dbname); 
 if (!$conn){     
 			die("Connection failed: " . mysqli_connect_error()); 
			}
	
$sql = "INSERT INTO fb(`name`,`email`,`fb`) VALUES ('$name','$email','$fb')";

if (mysqli_query($conn,$sql))
 {    
	echo "Feedback Sent Successfully";  
  }

else 
   {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }

mysqli_close($conn);

 ?>