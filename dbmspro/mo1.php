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
<h1 style="font-size: 40pt">MESS LEAVE</h1>
<br>
<center>
<form action="messleave.php" method="post">

<h3><b>YEAR</b>
  <input type="text" name="year" required="true">
<b> MONTH</b>
  <input type="int" name="month" required="true"><br><br>
<hr><hr>
<b> ROLL NO</b><br>
  <input type="text" name="rollno" required="true"><br><br>
<b>FROM (DATE)</b><br>
  <input type="date" name="from" required="true"><br><br>
<b>TO (DATE)</b><br>
  <input type="date" name="to"  required="true"><br><br>
<b>NO OF DAYs</b><br>
  <input type="int" name="noofdays"  required="true"><br><br>  </h3>

  <input type="submit" value="Leave" style="font-size: 16pt" ><br><br>
</center>
</form>
<center><a href="1.php"><img src="home.png" width="80px" height="80px"></a></center>
</center>
</section>

</body>
</html>



