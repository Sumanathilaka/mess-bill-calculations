<!DOCTYPE html>
<html>

<head>
<style >
    body{

     
        color: black;
 background-image: url("410.jpg");
        background-size :cover; 
    }

h1{
 color : brown;
text-align:center;

}

section {
    width:1200px;
    float:right;
    padding:10px;
    text-align:center;
}

.check {

  float: right;
}
a{

    padding: 15px;
}

</style>

</head>
<body>
  
  <br><br><br><br>

<section>
    <center>
 <a href="index.php"><img src="log.png" width="80px" height="80px"></a>
</center>

<h1 style="font-size:60pt ;font-family:'samarkan'">MESS MANAGER</h1>
<center><h2> B-MESS - NITC </h2></center>
<br>



<center>

<a href="mm1.php"><img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="mm1.jpg" height="300px" width="300px"/></a>
<a href="mm2.php"><img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="mm2.jpg" height="300px" width="300px"/></a>
<a href="mm3.php"><img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="mm3.jpg" height="300px" width="300px"/></a><br><br><br>
<a href="mm4.php"><img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="mm4.jpg" height="300px" width="300px"/></a>
<a href="mm5.php"><img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="mm5.jpg" height="300px" width="300px"/></a>
<br><br><br>


</center>

<script>
function bigImg(x) {
    x.style.height = "350px";
    x.style.width = "350px";
}

function normalImg(x) {
    x.style.height = "300px";
    x.style.width = "300px";
}
</script>
</section>

</body>
</html>


