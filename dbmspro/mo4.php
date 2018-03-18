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
<h1 style="font-size: 40pt;color:maroon">GUEST COUPONS</h1>
<br>
<center>
<form action="guest.php" method="post">

<h3><b>YEAR</b>
  <input type="text" name="year" required="true">
<b> MONTH</b>
  <input type="int" name="month" required="true"><br><br>
<hr><hr>
<b> ROLL NO</b><br>
  <input type="text" name="rollno" required="true"><br><br>
   <b>DATE</b><br>
  <input type="date" name="date"  required="true"><br><br></h3>
 
 <b>NO OF GUESTs</b><br>
  <input type="text" name="guests" required="true"><br><br>
 <b>DAY PORTION</b><br>
<select name="portion">
  <option value="Fullday">FullDay</option>
  <option value="Breakfast">Breakfast</option>
  <option value="Lunch">Lunch</option>
    <option value="Dinner">Dinner</option>
</select><br><br>
  <b>COST</b><br>
  <input type="int" name="cost" required="true"><br><br>
 

  <input type="submit" value="submit" style="font-size: 16pt" ><br><br>
</center>
</form>
<center><a href="1.php"><img src="home.png" width="80px" height="80px"></a></center>
</center>
</section>

</body>
</html>



