
<!DOCTYPE html>
 <head>
 <style >
    
    body{

         color: black;
        background-image: url("aaa.jpg");
        background-size :cover; 
        text-align: center;
    }

h1{
  color: darkorange;
}

.check{
    float: right;
	width: 1100px;
}
  </style>
  </head>

     <body>

	<div class="check">
<br><br>
<center><h1> FOOD ORDER INFORMATION </h1>
<br><br>

<?php

$conn = new mysqli("localhost", "root", "123", "dbms");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);     
} 

  $sql1 = "SELECT orderid,item,quantity,approval,requestdate FROM dailyorder";
$result1= mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
    
    while($row = mysqli_fetch_assoc($result1)) {
                     if($row['approval']=="NO"){
                     	
                        echo "<h2>Order-id :".$row["orderid"]."<br>"."Item :".$row["item"].
                        "<br>"."Quantity :".$row["quantity"]."<br>"."Request date :".$row["requestdate"]."<br></h2><hr>";
                         }}}      	 
   mysqli_close($conn);  
?>



<form action="destock.php" method="POST">
	<br>
	<h2 style="color:green"> APPROVAL FOR DESTOCK</h2>
  <b> ORDER ID 1</b>
  <input type="text" name="order" required="true" value="0">
  <select name="approval">
   <option value="YES">YES</option>
   <option value="NO">NO</option>
   </select>
   <input type="date" name="date1" placeholder="approval-date">
  <br>
<br>
  <input type="submit" value="Destock" style="font-size: 16pt">
  <br><br>
  
</form>
<br>
<a href="2.php"><img src="home.png" height="60px" width="60px"></a>

</center>
</div>
</body>
</html>