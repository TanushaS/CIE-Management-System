<html>
	<body>
		<?php
		$conn = mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"wpproject");

		$name = $_POST["emailid"];
		$pwd = $_POST["pass"];
		//$addr2 = $_POST["addr2"];
		//$email = $_POST["email"];

$query = "INSERT INTO login_table ( Email_id, password) VALUES ('$name','$pwd')";
if(mysqli_query($conn,$query))
{
	header("location:homepage.html");
	//echo "Successful";
}
mysqli_query($conn,$query) or die(mysqli_error($conn));
		?>


	</body>
</html>
