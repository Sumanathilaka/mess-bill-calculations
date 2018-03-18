<!DOCTYPE html>

<html>
 
<body>
       
 
<?php

$conn = new mysqli("localhost", "root", "123", "dbms");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

      $name=mysqli_real_escape_string($conn, $_POST['name']);
	    $rollno=mysqli_real_escape_string($conn, $_POST['rollno']);
      $address=mysqli_real_escape_string($conn, $_POST['address']);
      $mobile=mysqli_real_escape_string($conn, $_POST['mobile']);
      $email=mysqli_real_escape_string($conn, $_POST['email']);
      $department=mysqli_real_escape_string($conn, $_POST['department']);
      $username=mysqli_real_escape_string($conn, $_POST['username']);
      $password=mysqli_real_escape_string($conn, $_POST['password']);
      $year=mysqli_real_escape_string($conn, $_POST['year']);
      $month=mysqli_real_escape_string($conn, $_POST['month']);
	   
	   
	   

$sql = " INSERT INTO diner(rollno,fullname,department,address,telephone,email,username,password,year,month) VALUES 
('$rollno','$name','$department','$address','$mobile','$email','$username','$password','$year',
  '$month')";


if (mysqli_query($conn, $sql) === TRUE) {
  header('location:1.php');
} else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>







   </body>
</html>

