<!DOCTYPE html>
 <head>
 <style >
    body{

         color: black;
         background-image: url("asas.jpg");
      background-size :cover; 
        text-align: center;
    }

h1{
  color: orange;
}
section {
 width:1000px;
 height: 1000px;
 float:right;
} 
    </style>
    </head>

  <body>
	<center>
    <section>

<br><br><br><br>
<center><h1 style="font-size: 35pt;color: darkblue"> PRODUCT USAGE & COST INFORMATION </h1></center> 
<br><br>


<center>
<?php

$conn = new mysqli("localhost", "root", "123", "dbms");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);     
} 

$x=0;
 $year=mysqli_real_escape_string($conn, $_POST['year']);
 $month=mysqli_real_escape_string($conn, $_POST['month']);
$sql4 = "SELECT year,month,item,sum(quantity) as total,sum(cost) as sumt FROM ordertomess WHERE month=$month and year=$year
group by item
order by total desc";

$result4= mysqli_query($conn, $sql4);
if (mysqli_num_rows($result4) > 0) {
 while($row = mysqli_fetch_assoc($result4)) {
         $x=1;
          echo "<h3>Product Name :".$row[item]."<br>".
          "Total Quantity :".$row[total]."<br>".
          "Total Cost :".$row[sumt]."<br><hr></h3>"  ;    	

                 
    }}

 mysqli_close($conn);

     if ($x==0) {
     
      echo "<h1>"."Mess was closed for the Given Month"."</h1>";
    }

?>
<br>
<br>
    <a href="2.php"><img src="home.png" width="60px" height="60px"></a>
</center>

</div>

</body>
</html>


