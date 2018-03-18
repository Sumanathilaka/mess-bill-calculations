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
      $guests=mysqli_real_escape_string($conn, $_POST['guests']);
      $portion=mysqli_real_escape_string($conn, $_POST['portion']);
      $date=mysqli_real_escape_string($conn, $_POST['date']);
      $cost=mysqli_real_escape_string($conn, $_POST['cost']);
     

$sql = " INSERT INTO guest(year,month,rollno,guestno,portion,date,cost) VALUES 
('$year','$month','$rollno','$guests','$portion','$date','$cost')";


if (mysqli_query($conn, $sql) === TRUE) {
  header('location:1.php');
} else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>


</body>
</html>


