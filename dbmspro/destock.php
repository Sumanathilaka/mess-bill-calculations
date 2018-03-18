<!DOCTYPE html>

<html>
 
<body>
       
 
<?php

$conn = new mysqli("localhost", "root", "123", "dbms");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

     
      $order=mysqli_real_escape_string($conn, $_POST['order']);
      $approval=mysqli_real_escape_string($conn, $_POST['approval']);
      $date1=mysqli_real_escape_string($conn, $_POST['date1']);



$sql= "UPDATE dailyorder SET approval='$approval'  WHERE orderid ='$order' ";

if (mysqli_query($conn, $sql) === TRUE) {
 echo "done";
} else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql= "UPDATE dailyorder SET releaseddate='$date1'  WHERE orderid ='$order' ";


if (mysqli_query($conn, $sql) === TRUE) {
  header('location:mm1.php');
} else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<a href="2.php"><img src="home.png" width="80px" height="80px"></a>

 </body>
</html>

