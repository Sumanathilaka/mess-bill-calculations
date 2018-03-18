<!DOCTYPE html>
 <head>
 <style >
    body{

         color: black;
        background-image: url("pop.png");
        background-size :cover; 
        text-align: center;
    }

h1{
  color: green;
}
.check{

	width: 600px;
}
    </style>
    </head>

<body>
	<center>
	<div class="check">
<br><br><br><br>
<center><h1> MESS BILL INFORMATION </h1></center> 
<br><br>


<center>
<?php

$conn = new mysqli("localhost", "root", "123", "dbms");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);     
} 

 $year=mysqli_real_escape_string($conn, $_POST['year']);
 $month=mysqli_real_escape_string($conn, $_POST['month']);
 $rollno=mysqli_real_escape_string($conn, $_POST['rollno']);

$available=0;
 $sql6 = "SELECT rollno,year,month FROM diner";
$result6= mysqli_query($conn, $sql6);
if (mysqli_num_rows($result6) > 0) {
    
    while($row = mysqli_fetch_assoc($result6)) {
                     if($row['rollno']==$rollno){
                      if($row['year']==$year){
                               if($row['month']==$month){
                      $available=1;
                                
    }}}}}




  
$daysleave=0;
  $sql1 = "SELECT rollno,year,month,noofdays FROM messleave";
$result1= mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
    
    while($row = mysqli_fetch_assoc($result1)) {
                     if($row['rollno']==$rollno){
                     	if($row['year']==$year){
                               if($row['month']==$month){

                               	 $daysleave=$daysleave+$row['noofdays'];
    }}}}}


$extracharge=0;
$sql = "SELECT year,month,rollno,cost FROM purchase";
$result= mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
                    if($row['rollno']==$rollno){
                     	if($row['year']==$year){
                               if($row['month']==$month){
                     
              $extracharge=$extracharge+$row['cost'];
                   
  }}}}}

$guestcost=0;
$sql3 = "SELECT rollno,year,month,cost FROM guest";

$result3= mysqli_query($conn, $sql3);

if (mysqli_num_rows($result3) > 0) {
    
    while($row = mysqli_fetch_assoc($result3)) {
                     if($row['rollno']==$rollno){
                     	if($row['year']==$year){
                               if($row['month']==$month){

                 $guestcost=$guestcost+$row['cost'];
    }}}}}

$payments=0;
$sql4 = "SELECT rollno,year,month,amount FROM payments";

$result4= mysqli_query($conn, $sql4);

if (mysqli_num_rows($result4) > 0) {
    
    while($row = mysqli_fetch_assoc($result4)) {
                     if($row['rollno']==$rollno){
                     	if($row['year']==$year){
                               if($row['month']==$month){

                 $payments=$payments+$row['amount'];
    }}}}}

if ($month==1 ||$month==3||$month==5||$month==7||$month==8||$month==10||$month==12)
{
	$caldays=31;
}
if ($month==4 ||$month==6||$month==6||$month==11)
{
	$caldays=30;
}
if ($month==2)
{
	$caldays=28;
}

if($available==1){

$diningdays=$caldays-$daysleave;
$costdays=$diningdays*75;
echo "<h2>No of Days : ".$diningdays."<br><br>" ;
echo "<hr>Daily Cost : Rs ".$costdays."<br><br>";
echo "Extra Charges : Rs ".$extracharge."<br><br>";
echo "Guest Coupon Charges : Rs ".$guestcost."<br><br>";
$fullbill=$costdays+$extracharge+$guestcost;
echo "<hr>FULL BILL : Rs ".$fullbill."<br><br>";
echo "Payments : Rs ".$payments."<br><br>";
$finalbill=$payments-$fullbill;
if ($finalbill>=0) {
	echo "<hr>BALANCE : Rs ".$finalbill;
}

if ($finalbill<0) {
	$finalbill=$finalbill*(-1);
	echo "<hr>DUES : Rs ".$finalbill;
}

}

if($available==0){

echo "<br><br><br><br><br>";
echo "<h2>NOT REGISTERD  WITH B MESS FOR THIS MONTH</h2> ";
}

 mysqli_close($conn);

?>
<br>
<br>
    <a href="3.php"><img src="home.png" width="60px" height="60px"></a>
</center>

</div>

</body>
</html>


