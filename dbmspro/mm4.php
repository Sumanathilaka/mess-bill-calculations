<!DOCTYPE html>
<html>

<head>
<style >
    body{

     
        color: black;
        background-image: url("asas.jpg");
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
 float:right;
} 
</style>

</head>
<body>
<br>

<section>
<center>
<br><br><br>
<br><br>
<h2 style="font-size: 30pt;color:red ">CASH-BOOK </h2>
<br>
<center>
<form action="cashbook.php" method="post">


<b>YEAR</b><br>
<input type="text" name="year" required="true"><br><br>
<b>MONTH</b><br>
<input type="text" name="month" required="true"><br><br>
<b>PAYMENT FOR WORKERS</b><br>
<input type="int" name="work" required="true" value="0"><br><br>
<b>EXTRA EXPENDITURE</b><br>
<input type="int" name="extra" required="true" value="0"><br><br>
<input type="submit" value="CALCULATE" style="font-size: 16pt" ><br><br><br>
<a href="2.php"><img src="home.png" width="60px" height="60px"></a>

</center>
</form>
<br><br>

</center>
</section>
</body>
</html>



