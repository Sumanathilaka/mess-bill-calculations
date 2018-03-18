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
  color: green;
}

.check{
float: right;
	width: 1200px;
}
    </style>
    </head>

<body>
	<center>

<div class="check">
<br><br><br><br>
<center><h1> STOCK INFORMATION </h1></center> 
<br><br>
<center>
<?php

$conn = new mysqli("localhost", "root", "123", "dbms");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);     
} 

 $item=mysqli_real_escape_string($conn, $_POST['item']);

  $yes="YES";
   $stockq=0;
  $sql1 = "SELECT item ,quantity,approval FROM ordertomess";
$result1= mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
    
    while($row = mysqli_fetch_assoc($result1)) {
                     if($row['item']==$item){
                     	if($row['approval']==$yes){
                       $stockq=$stockq+$row['quantity'];

                        
    }}}}

  $yes="YES";
$stockr=0;
  $sql = "SELECT item ,quantity,approval FROM dailyorder";
$result= mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
                     if($row['item']==$item){
                      if($row['approval']==$yes){
                       $stockr=$stockr+$row['quantity'];

                        
    }}}}


    echo "<h2>Search Product :".$item."<br>";
 $sum=$stockq-$stockr;
    echo "Availability : ".$sum."<br></h2>";

 mysqli_close($conn);

?>
</center>
<center><a href="2.php"><img src="home.png" width="80px" height="80px"></a></center>
</div><br>


</body>
</html>


