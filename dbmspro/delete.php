<!DOCTYPE html>
<html>

<head>
<style >
    body{

     
        color: black;
        background-image: url("12345.jpg");
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
 
float: right;

}
</style>

</head>
<body>
<br>
<section>
<br><br><br><br><br><br><br><br>
<center>
<h1 style="font-size: 25pt">DELETE DINERs ENTRY</h1><br>
<center>
  <form action="delete2.php" method="post">
    <br>
<b> ROLL NO :</b><br>
  <input type="text" name="rollno"><br><br>
  <input type="submit" value="Delete" style="font-size: 16pt"><br><br>
</center>
</form>

<h1 style="font-size: 25pt">DELETE ALL DINERs (MONTH) </h1><br>
<center>
  <form action="delete3.php" method="post">
    <br>
<b> YEAR :</b><br>
  <input type="text" name="year"><br><br>
  <b> MONTH :</b><br>
  <input type="text" name="month"><br><br>
  <input type="submit" value="Delete" style="font-size: 16pt"><br><br>
</center>
</form>




<center><a href="1.php"><img src="home.png" width="80px" height="80px"></a></center>

</section>
</body>
</html>



