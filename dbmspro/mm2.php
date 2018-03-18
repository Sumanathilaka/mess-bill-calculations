<!DOCTYPE html>
<html>

<head>
<style >
    body{

     
        color: black;
        background-image: url("qwerty.jpg");
        background-size :cover; 
    }

h1{
  color : brown;
  text-align:center;

}

h3{
  color : black;
  

}

section{
  width: 700px;
}

</style>

</head>
<body>
  <center>
<section>


<h1 style="font-size: 30pt">MAKE AN ORDER</h1>
<br>

<form action="ordertomess.php" method="post">
<h3><b>YEAR</b>
  <input type="text" name="year" required="true">
<b> MONTH</b>
  <input type="int" name="month" required="true"><br><br>
<h3><b>ORDER ITEM</b><br>
  <input type="text" name="item" required="true"><br><br>
<b> QUANTITY</b><br>
  <input type="int" name="qty" required="true"><br><br>
<b>ORDERD-DATE</b><br>
  <input type="date" name="date2" required="true"><br><br>
<b>SUPPLIER</b><br>
  <input type="text" name="supplier" required="true"><br><br>
</h3>
  <input type="submit" value="order" style="font-size: 16pt" ><br><br>
</form>

<br><br>
<center><h1 style="font-size: 30pt;color: purple"> ORDERD ITEM </h1>
<br><br>

<?php

$conn = new mysqli("localhost", "root", "123", "dbms");
$x=0;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);     
} 

  $sql1 = "SELECT orderid,item,quantity,approval,requestdate,supplier FROM ordertomess";
$result1= mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
    
    while($row = mysqli_fetch_assoc($result1)) {
                     if($row['approval']=="NO"){
                      $x=1;
                        echo "<h2>Order-id :".$row["orderid"]."<br>"."Item :".$row["item"].
                        "<br>"."Quantity :".$row["quantity"]."<br>"."Request date :".$row["requestdate"]."<br>"."Supplier : ".$row["supplier"].
                        "<br></h2><hr>";
                         }}}

                         if($x==0){
                          echo "<b><h3>NO ITEMs ARE  PENDING TO RECEIVED</h3></b>";
                         }         
   mysqli_close($conn);  
?>


<form action="ordermesscheck.php" method="POST">
  <br>
  <h2 style="color:green;font-size: 30pt"> RECEIVED ITEMS</h2>
  <b> ORDER ID 1</b>
  <input type="text" name="order" required="true" value="0"><br><br>
    <b> ORDER RECEIVED </b>
  <select name="approval">
   <option value="YES">YES</option>
   <option value="NO">NO</option>
   </select>
<br><br>
      <b> COST</b> <input type="text" name="cost" placeholder="cost"><br><br>
     <b> ORDER-RECEIVED DATE</b> <input type="date" name="date1" placeholder="approval-date">
  <br>
<br>
  <input type="submit" value="RECEIVED" style="font-size: 16pt">
  <br><br>
  </form>
<center><a href="2.php"><img src="home.png" width="80px" height="80px"></a></center>

</section>
</center>
</body>
</html>



