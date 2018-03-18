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
<h1 style="font-size: 40pt">MESS BILL</h1>
<h4>( Monthly Calculation )</h4>
<br>
<center>
<form action="messbill.php" method="post">

<h3><b>YEAR</b>
  <input type="text" name="year" >
<b> MONTH</b>
  <input type="int" name="month" ><br><br>

<b> ROLL NO</b><br>
  <input type="text" name="rollno" ><br><br>

<input type="submit" value="calculate" style="font-size: 16pt" ><br><br>
<hr><hr>
</form>


<center><a href="1.php"><img src="home.png" width="80px" height="80px"></a></center>
</center>
</section>

</body>
</html>



