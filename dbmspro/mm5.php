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
<h1 style="font-size: 40pt">SEARCH FOR ITEM DETAILS</h1>
<br>
<center>
<form action="abc.php" method="post">

<h3><b>YEAR</b>
  <input type="text" name="year" required="true">
<b> MONTH</b>
  <input type="int" name="month" required="true"><br><br>
<input type="submit" value="search" style="font-size: 16pt" ><br><br>
</h3>
</center>
</form>

<hr><hr>
<center>
<h2 style="font-size: 30pt;color: red">FROM-TO SEARCH</h2>
<br>
<form action="abcd.php" method="post">
<h3><b>FROM</b>
  <input type="date" name="from" required="true">
<b> TO</b>
  <input type="date" name="to" required="true"><br><br>

<input type="submit" value="search" style="font-size: 16pt"><br><br>
</h3>
</center>
</form>
<center><a href="2.php"><img src="home.png" width="80px" height="80px"></a></center>


</section>
</center>


</body>
</html>



