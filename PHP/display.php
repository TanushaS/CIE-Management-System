<html>
<body background="C:\xampp\htdocs\bg.jpg" width="1800" height="4200" >
<div style="background-image:url('http://localhost:8080/WPproject/bg3.jpg'); width: 100%; height: 900px;background-size: 125%; font-family:sans-serif; background-repeat:no-repeat;">
<table cellspacing="1" >
<tr>
<th><div style="background-image:url('http://localhost:8080/logo1.png');background-size:100%;float:left;">
<span><img  width="170" height="170"/></span></div><br/></th>
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div style="font-size:60; float:center;">BMS COLLEGE  OF ENGINEERING</div><br/><center><h3>(Autonomous Institute under VTU)</h3></center></th></tr>
</table>
<div style="color:blue;">
<font size="6">
<marquee direction="left">YOUR CIE MARKS DETAILS....</marquee>
</font>
</div>
<hr/>
<h2>Home&nbsp;&nbsp;|<a href="about.html">About Us</a>   &nbsp;&nbsp;|
<a href="contact.html">Contact Us</a>   &nbsp;&nbsp;| <a href="project.html">Log out</a>   &nbsp;&nbsp;|
</h2>
<style type="text/css">
table{border:2;
border-width:thick;
}
</style>
<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"wpproject");

$search = $_POST["search"];

$query = "SELECT * FROM COA WHERE USN = '$search'";
$query2 = "SELECT * FROM DM WHERE USN = '$search'";
$query3 = "SELECT * FROM DS WHERE USN = '$search'";
$query4 = "SELECT * FROM WP WHERE USN = '$search'";
$query5 = "SELECT * FROM CPP WHERE USN = '$search'";

$result = mysqli_query($conn,$query);
$result2 = mysqli_query($conn,$query2);
$result3 = mysqli_query($conn,$query3);
$result4 = mysqli_query($conn,$query4);
$result5 = mysqli_query($conn,$query5);
if(mysqli_num_rows($result) == 0)
echo "Not found your USN in COA scores list<br />";
if(mysqli_num_rows($result2) == 0)
echo "Not found your USN in DM scores list<br />";
if(mysqli_num_rows($result3) == 0)
echo "Not found your USN in DS scores list<br />";
if(mysqli_num_rows($result4) == 0)
echo "Not found your USN in WP scores list<br />";
if(mysqli_num_rows($result5) == 0)
echo "Not found your USN in CPP scores list<br />";
//else
//echo "Found<br />";

$row = mysqli_fetch_array($result);
$row2 = mysqli_fetch_array($result2);
$row3 = mysqli_fetch_array($result3);
$row4 = mysqli_fetch_array($result4);
$row5 = mysqli_fetch_array($result5);
echo "<h2>USN : </h2>".$row["USN"];
?>

<?php
echo "<table border='2' align='center' cellspacing='10' cellpadding='20' style='border-width:thick;;'>"."<tr>"."<th> COURSE"." </th>" ."<th> TEST 1"." </th>" ."<th> TEST 2"."</th>". "<th> QUIZ 1 </th>"."<th> QUIZ 2"."</th>"." <th> LAB "."</th>"." <th> TOTAL" ."</th>". "</tr>";
echo "<tr>"."<td> COA"."</td>"."<td>".$row["test1"]."</td>"."<td>" .$row["test2"]."</td>"."<td>".$row["quiz1"]."</td>"."<td>".$row["quiz2"]."</td>"."<td>".$row["lab"]."</td>"."<td>".$row["total"]."</td>"."</tr>";
echo "<tr>"."<td> DM"."</td>"."<td>".$row2["test1"]."</td>"."<td>" .$row2["test2"]."</td>"."<td>".$row2["quiz1"]."</td>"."<td>".$row2["quiz2"]."</td>"."<td>".$row2["lab"]."</td>"."<td>".$row2["total"]."</td>"."</tr>";
echo "<tr>"."<td> DS"."</td>"."<td>".$row3["test1"]."</td>"."<td>" .$row3["test2"]."</td>"."<td>".$row3["quiz1"]."</td>"."<td>".$row3["quiz2"]."</td>"."<td>".$row3["lab"]."</td>"."<td>".$row3["total"]."</td>"."</tr>";
echo "<tr>"."<td> WP"."</td>"."<td>".$row4["test1"]."</td>"."<td>" .$row4["test2"]."</td>"."<td>".$row4["quiz1"]."</td>"."<td>".$row4["quiz2"]."</td>"."<td>".$row4["lab"]."</td>"."<td>".$row4["total"]."</td>"."</tr>";
echo "<tr>"."<td> CPP"."</td>"."<td>".$row5["test1"]."</td>"."<td>" .$row5["test2"]."</td>"."<td>".$row5["quiz1"]."</td>"."<td>".$row5["quiz2"]."</td>"."<td>".$row5["lab"]."</td>"."<td>".$row5["total"]."</td>"."</tr>";
echo "</table>";
?>
</body>
</html>
