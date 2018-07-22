<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$name=$_GET['student_name'];
	$email=$_GET['student_email'];
	$date=$_GET['student_date'];
?>
<?php
$con = mysqli_connect("localhost","root","","class_test");
	if (mysqli_connect_errno())
   	{
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   	}
 //   	$query="CREATE TABLE class1 (
 //    id INT, 
 //    email VARCHAR(100), 
 //    paasword VARCHAR(100));";

	// $result=mysqli_query($con,$query);
	// if ($result) {
	// 	echo "Successfully Created";
	// }
	// else{
	// 	echo "Error";
	// }
	// $email=$_POST['emailid'];
	// $password=$_POST['password'];
	// echo $email.' '.$password;
	//   	$query="INSERT INTO class1 (email,paasword) VALUES ('$email','$password')";
	// $result=mysqli_query($con,$query);
	$query="INSERT INTO students (name,email,date) VALUES ('$name','$email','$date')";
	$result=mysqli_query($con,$query);
	if ($result) {
		echo "Successfully Inserted";
	}
	else{
		echo "Error";
	}
 ?>
</body>
</html>