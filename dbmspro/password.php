<!DOCTYPE html>
<html>
<head>
<style>

body{

color:white;
text-align: center;

}

</style>
</head>

<body>
<br><br>
<?php

$abc=mysqli_real_escape_string($conn, $_POST['head']);
$x=0;

if($_POST['head']==1){



$conn = mysqli_connect('localhost', 'root', '123', 'dbms');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT username,password FROM messoperatorlogin";
$result= mysqli_query($conn, $sql);

$username=mysqli_real_escape_string($conn, $_POST['username']);
$pass=mysqli_real_escape_string($conn, $_POST['pass']);
$x=0;
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
               if($row[username]==$username){
                        if($row[password]==$pass){
                        $x=1;
                          
                   Header("location:1.php");
                                        
}}}}}


if($_POST['head']==2)
{




$conn = mysqli_connect('localhost', 'root', '123', 'dbms');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT username,password FROM messmanagerlogin";
$result= mysqli_query($conn, $sql);

$username=mysqli_real_escape_string($conn, $_POST['username']);
$pass=mysqli_real_escape_string($conn, $_POST['pass']);
$x=0;
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
               if($row[username]==$username){
                        if($row[password]==$pass){
                        $x=1;
                          
                   Header("location:2.php");
                                        
}}}}}

if($_POST['head']==3)
{




$conn = mysqli_connect('localhost', 'root', '123', 'dbms');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT username,password FROM diner";
$result= mysqli_query($conn, $sql);

$username=mysqli_real_escape_string($conn, $_POST['username']);
$pass=mysqli_real_escape_string($conn, $_POST['pass']);
$x=0;
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
               if($row[username]==$username){
                        if($row[password]==$pass){
                        $x=1;
                          
                   Header("location:3.php");
                                        
}}}}}



if($x==0){
  
      include('index.php');
       echo "<h3> ___________Username or Password Invalid __________ </h3>";
}
      

mysqli_close($conn);
?> 

</body>
</html>
