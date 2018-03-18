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
<h1 style="font-size: 40pt;color:green">FOOD ORDERs</h1>
<br>
<center>
<form action="dailyorder.php" method="post">

<b> ITEM NAME</b><br>
  <input type="text" name="item" required="true"><br><br>
<b>QUANTITY</b><br>
  <input type="int" name="quantity" required="true"><br><br>
<b>REQUEST DATE</b><br>
  <input type="date" name="requestdate"  required="true"><br><br></h3>

  <input type="submit" value="Order" style="font-size: 16pt" ><br><br>
</center>
</form>
<center><a href="1.php"><img src="home.png" width="80px" height="80px"></a></center>
</center>
</section>

</body>
</html>



