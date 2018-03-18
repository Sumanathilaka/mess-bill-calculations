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
      $item=mysqli_real_escape_string($conn, $_POST['item']);
      $qty=mysqli_real_escape_string($conn, $_POST['qty']);
      $supplier=mysqli_real_escape_string($conn, $_POST['supplier']);
      $approval=mysqli_real_escape_string($conn, $_POST['approval']);
      $date2=mysqli_real_escape_string($conn, $_POST['date2']);
      $approval="NO";
	   

$sql = " INSERT INTO ordertomess(item,quantity,requestdate,approval,supplier,year,month) VALUES 
('$item','$qty','$date2','$approval','$supplier','$year','$month')";


if (mysqli_query($conn, $sql) === TRUE) {
  header('location:mm2.php');
} else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>







   </body>
</html>

