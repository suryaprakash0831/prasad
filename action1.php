<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Smart monitoring system</title>
  <link rel="stylesheet" href="https://jolly-kalam-23776e.netlify.com/parallaxsite/css/style.css">
</head>
<body>
 
<div class="pimg2">
    <div class="ptext">
      <span class="border">
       Smart monitoring system
      </span>
    </div>
  </div>


   <section class="section section-light">
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}



</style>
</head>
<head>
<style>
table{
font-family:arial,sans-serif;
border-collapse:collapse;
width:100%;
}
td,th{
border:1px Solid #dddddd;
text-align:left;
Padding:8px;
}
tr:nth-child(even){
background-color:#dddddd;
}
</style>
</head>

<div class="container">
<br>
 <hr>

<?php
$x=$_POST{'name'};
$y=$_POST{'branch'};
$b = '%';
$c = $x.$b;
$Servername="localhost";
$username="root";
$password="";
$dbname="db1";
$conn=new mysqli($Servername,$username,$password,$dbname);
if($conn -> connect_error){
die("connection failed:".$conn -> connect_error);
}
$sql="select * from college where name like '$c' and branch='$y';";
$result=$conn->query($sql);
if($result->num_rows>0){
echo"<table>";
while($row=$result->fetch_assoc()){
echo"<tr><td>usn:".$row["usn"]." "."</td><td>name:"." ".$row["name"]." "."</td><td>branch:"." ".$row["branch"]." "."</td><td>semester:"." ".$row["semester"]." "."</td><td>section:"." ".$row["section"]." "."</td><td>email id:"." ".$row["email_id"]." "."</td><td>phone number:"." ".$row["phone_number"]." "."</td><td>place:"." ".$row["place"]."</td></tr>";
}
echo"</table>";
}
else{
echo"0 results";
}
$conn->close();
?>  
<br>
 <hr>
  </div>


  </section>

<section class="section section-dark">
    <h4>Project Done by</h4>
    <p>Name: Suryaprakash.S  Usn NO: 4NI17EC087 <br>Name: Shreyank.M  Usn NO: 4NI17EC107 </p>
    <h4>Under the guidance</h4>
    <p>Pratheeksha C S <br> Assisant professor,Dept.of ECE</p>  
    <h4>Project coordinator</h4>
    <p>Lokesha H R<br> Assisant professor,Dept.of ECE</p>
    <p>K V Nagalakshmi<br>Associate professor,Dept.of ECE</p>
  </section>

</body>
</html>
