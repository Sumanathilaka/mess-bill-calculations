<!DOCTYPE html>

<html>
 
<body>
       
 
<?php

$conn = new mysqli("localhost", "root", "123", "dbms");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

     
      $item=mysqli_real_escape_string($conn, $_POST['item']);
      $quantity=mysqli_real_escape_string($conn, $_POST['quantity']);
      $requestdate=mysqli_real_escape_string($conn, $_POST['requestdate']);
      $approval="NO";
	   

$sql = " INSERT INTO dailyorder(item,quantity,requestdate,approval) VALUES 
('$item','$quantity','$requestdate','$approval')";


if (mysqli_query($conn, $sql) === TRUE) {
  header('location:1.php');
} else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>







   </body>
</html>

