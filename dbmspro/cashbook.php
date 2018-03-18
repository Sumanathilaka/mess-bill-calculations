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
<center><h1 style="font-size: 35pt;color: darkblue"> MESS BILL INFORMATION </h1></center> 
<br><br>


<center>
<?php

$conn = new mysqli("localhost", "root", "123", "dbms");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);     
} 
$year=mysqli_real_escape_string($conn, $_POST['year']);
$month=mysqli_real_escape_string($conn, $_POST['month']);
$work=mysqli_real_escape_string($conn, $_POST['work']);
$extra=mysqli_real_escape_string($conn, $_POST['extra']);

$payments=0;
$sql4 = "SELECT year,month,amount FROM payments";

$result4= mysqli_query($conn, $sql4);

if (mysqli_num_rows($result4) > 0) {
    
    while($row = mysqli_fetch_assoc($result4)) {
                	if($row['year']==$year){
                               if($row['month']==$month){

                 $payments=$payments+$row['amount'];
    }}}}


    $extracharge=0;
    $approval="YES";
$sql = "SELECT year,month,cost,approval FROM ordertomess";
$result= mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
                    if($row['approval']==$approval){
                      if($row['year']==$year){
                        if($row['month']==$month){
                     
              $extracharge=$extracharge+$row['cost'];
                   
  }}}}}



echo "<h1>INCOME<br>"."</h1>";
echo "<h2>By Payments : Rs ".$payments."<br><br></h2>";


echo "<h1>EXPENDITURE</h1>";
echo "<h2>Charges for goods : Rs ".$extracharge."<br>";
echo "For Workers : Rs ".$work."<br>";
echo "Extra : Rs ".$extra."<br></h2>";
$finalbill=$payments-$extracharge-$extra-$work;


if ($finalbill>=0) {
	echo "<h2><hr>PROFIT : Rs ".$finalbill."</h2>";
}

if ($finalbill<0) {
	$finalbill=$finalbill*(-1);
	echo "<hr><h2>LOSS : Rs ".$finalbill."</h2>";
}

 mysqli_close($conn);

?>
<br>
<br>
    <a href="2.php"><img src="home.png" width="60px" height="60px"></a>
</center>

</div>

</body>
</html>


