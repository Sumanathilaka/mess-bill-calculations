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
<h1 style="font-size: 40pt;color:darkblue ">MESS BILL PAYMENT</h1>
<br>
<center>
<form action="payment.php" method="post">

<h3><b>YEAR</b>
  <input type="text" name="year" required="true">
<b> MONTH</b>
  <input type="int" name="month" required="true"><br><br>
<hr><hr>
<b> ROLL NO</b><br>
  <input type="text" name="rollno" required="true"><br><br>
<b>AMOUNT</b><br>
  <input type="text" name="amount" required="true"><br><br>
<b>TRANSACTION METHOD</b><br>
<select name="method">
  <option value="Netbanking">Net Banking</option>
  <option value="Visacard">Visa Card</option>
  <option value="Creditcard">Credit Card</option>
</select><br><br>
  <b>DATE</b><br>
  <input type="date" name="date"  required="true"><br><br></h3>

  <input type="submit" value="Pay" style="font-size: 16pt" ><br><br>
</center>
</form>
<center><a href="1.php"><img src="home.png" width="80px" height="80px"></a></center>
</center>
</section>

</body>
</html>



