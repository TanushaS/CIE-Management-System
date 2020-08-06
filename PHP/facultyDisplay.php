<!DOCTYPE html>
<html>
<head>
</head>
<body background="C:\xampp\htdocs\bg.jpg" width="1800" height="4200" >
<div style="background-image:url('http://localhost:8080/WPproject/bg3.jpg'); width: 100%; height: 900px;background-size: 125%; font-family:sans-serif; background-repeat:no-repeat;">
<table cellspacing="1" >
<tr>
<th><div style="background-image:url('http://localhost:8080/logo1.png');background-size:100%;float:left;">
<span><img  width="170" height="170"/></span></div><br/></th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div style="font-size:60; float:center;"><h1>BMS COLLEGE  OF ENGINEERING</h1></div>
(Autonomous Institute under VTU)</th></tr>
</table>
<div style="color:blue;">
<font size="6">
<marquee direction="left">CIE MARKS DETAILS....</marquee>
</font>
</div>
<hr/>
<h2>Home&nbsp;&nbsp;|<a href="about.html">About Us</a>   &nbsp;&nbsp;|
<a href="contact.html">Contact Us</a>   &nbsp;&nbsp;| <a href="project.html">Log out</a>   &nbsp;&nbsp;|
</h2>
<style type="text/css">
tr:nth-child(even){
	background-color:gray;
	}
</style>
<table name="myt" border='2' align='center' cellspacing='10' cellpadding='15' style='border-width:thick;border-collapse:collapse;width:80%;color:black;font-family:monospace;font-size:20px;
text-align:left;border:3px;'>
<div name='heading' style="color:white;
	background-color:red;">
<tr name='heading' style="color:white;
	background-color:red;">

<th>USN</th>
<th>NAME</th>
<th>TEST1</th>
<th>TEST2</th>
<th>QUIZ1</th>
<th>QUIZ2</th>
<th>LAB</th>
<th>TOTAL</th>

<tr>
</div>
<?php
$subject=$_POST["subject"];
$conn=mysqli_connect("localhost","root","","wpproject");
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
$sql="SELECT USN,name,test1,test2,quiz1,quiz2,lab,total from $subject";
$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo"<tr><td>".$row["USN"]."</td><td>".$row["name"]."</td><td>".$row["test1"]."</td><td>".$row["test2"]."</td><td>".$row["quiz1"]."</td><td>".$row["quiz2"]."</td><td>"
.$row["lab"]."</td><td>".$row["total"]."</td>";
}
echo"</table>";
}
else{
echo"0 result";
}
$conn->close();
?>
</table>
</body>
</html>
