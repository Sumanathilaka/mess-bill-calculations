
 <!DOCTYPE html>
<html>

<head>
<style >
    body{

     
        color: black;
        background-image: url("fin.jpg");
        background-size :cover; 
    }

h1{
  color : brown;
  text-align:center;

}

h3{
  color : black;
  

}



section {
 width:1000px;
 height: 1000px;
} 
</style>

</head>
<body>
<br>
<center>
<section>
<br><br><br><br>
<h1 style="font-size: 40pt;color:darkblue ">EXTRA ITEM PURCHASE</h1>
<br>
<center>
  <?php

$conn = new mysqli("localhost", "root", "123", "dbms");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

      $year=mysqli_real_escape_string($conn, $_POST['year']);
      $month=mysqli_real_escape_string($conn, $_POST['month']);
      $rollno=mysqli_real_escape_string($conn, $_POST['rollno']);
      $item=mysqli_real_escape_string($conn, $_POST['item']);
      $quantity=mysqli_real_escape_string($conn, $_POST['quantity']);
      $date=mysqli_real_escape_string($conn, $_POST['date']);
      $cost=mysqli_real_escape_string($conn, $_POST['cost']);
     

$sql = " INSERT INTO purchase(year,month,rollno,item,quantity,date,cost) VALUES 
('$year','$month','$rollno','$item','$quantity','$date','$cost')";


if (mysqli_query($conn, $sql) === TRUE) {
echo "<h2>Last Purchase :";
} 

echo "<h3><b>Year : ".$year ."  "."Month :".$month."<br>" ;
echo "Roll No : ".$rollno."<br>" ;
echo "Item : ".$item."<br>";
echo "Quantity : ".$quantity."<br>";
echo "Cost : ".$cost."<br>";
echo "Date : " .$date ."</h3></b>";
mysqli_close($conn);
?>
<hr>
<hr>
<form action="purchase.php" method="post">

<h3><b>YEAR</b>
  <input type="text" name="year" required="true">
<b> MONTH</b>
  <input type="int" name="month" required="true"><br><br>
<hr><hr>
<b> ROLL NO</b><br>
  <input type="text" name="rollno" required="true"><br><br>
<b>ITEM</b><br>
  <input type="text" name="item" required="true"><br><br>
<b>QUANTITY</b><br>
  <input type="text" name="quantity" required="true"><br><br>
  <b>COST</b><br>
  <input type="int" name="cost" required="true"><br><br>
  <b>DATE</b><br>
  <input type="date" name="date"  required="true"><br><br></h3>

  <input type="submit" value="purchase" style="font-size: 16pt" ><br><br>
</center>
</form>
<center><a href="1.php"><img src="home.png" width="80px" height="80px"></a></center>
</center>
</section>

</body>
</html>



      
 




