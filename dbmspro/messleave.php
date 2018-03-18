<!DOCTYPE html>

<html>
 
<body>
       
 
<?php

$conn = new mysqli("localhost", "root", "123", "dbms");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

      $year=mysqli_real_escape_string($conn, $_POST['year']);
      $month=mysqli_real_escape_string($conn, $_POST['month']);
      $rollno=mysqli_real_escape_string($conn, $_POST['rollno']);
      $from=mysqli_real_escape_string($conn, $_POST['from']);
      $to=mysqli_real_escape_string($conn, $_POST['to']);
      $noofdays=mysqli_real_escape_string($conn, $_POST['noofdays']);
	   

$sql = " INSERT INTO messleave(year,month,rollno,fromdate,todate,noofdays) VALUES 
('$year','$month','$rollno','$from','$to','$noofdays')";


if (mysqli_query($conn, $sql) === TRUE) {
  header('location:1.php');
} else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>







   </body>
</html>

