<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="wpproject"; 
$tbl_name="login_table"; 
$conn=mysqli_connect($host, $username, $password,$db_name);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 
mysqli_select_db($conn,$db_name)or die("cannot select DB");
// username and password sent from form 
$un= $_POST["username"];
$pwd=$_POST["password"]; 
// To protect MySQL injection (more detail about MySQL injection)
$un = stripslashes($un);
$pwd = stripslashes($pwd);
$un = mysqli_real_escape_string($un);
$pwd = mysqli_real_escape_string($pwd);
$sql="SELECT * FROM $tbl_name WHERE Email_id='$un' and password='$pwd' ";
$result=mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
if($count==0){
	echo "<h1>Invalid username or password</h1>";
header("location:project.html");
}
else {

header("location:homepage.html");
}
?>
