<!DOCTYPE html>
<html>

<head>
<style >
    body{

     
        color: black;
             background-image: url("30.jpg");
        background-size :cover; 
    }

h1{
 color : brown;
text-align:center;

}

section {
    width:1200px;
    float:left;
    padding:10px;
    text-align:center;
}

.check {

  float: right;
}

</style>
</head>
<body>
  <br><br><br><br><br><br><br>

<section>
<center>
 <a href="index.php"><img src="log.png" width="80px" height="80px"></a>
</center><br>
<h1 style="font-size:60pt;font-family:'samarkan' ">DINER's LOGIN</h1>
<br><br>

 <form action="studentbillcheck.php" method="post">
<h3><b>YEAR</b>
  <input type="text" name="year" required="true">
<b> MONTH</b>
  <input type="int" name="month" required="true"><br><br><br>


<b> ROLL NO</b><br>
  <input type="text" name="rollno" required="true"><br><br></h3>
<input type="submit" value="messbill" style="font-size: 16pt">
</form>

</center>
</section>






</body>
</html>


