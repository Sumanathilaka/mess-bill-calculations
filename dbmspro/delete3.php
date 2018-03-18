<!DOCTYPE html>
<html>
<body>
       
 
<?php

$conn = new mysqli("localhost", "root", "123", "dbms");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $month=mysqli_real_escape_string($conn, $_POST['month']);
 $year=mysqli_real_escape_string($conn, $_POST['year']);

	$sql = "DELETE FROM diner where year='$year' and month='$month'";


if (mysqli_query($conn, $sql) === TRUE) {
  header('location:1.php');
} else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>







   </body>
</html>

