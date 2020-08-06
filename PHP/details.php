<html>
	<body>
		<?php
		$conn = mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"wpproject");

		$usn = $_POST["usn"];
		$subject = $_POST["subject"];
		$query="DELETE FROM $subject WHERE USN=$usn";
		if(mysqli_query($conn,$query))
{
	echo "<h1>Successfuly Deleted</h1>";
}
mysqli_query($conn,$query) or die(mysqli_error($conn));
		?>
	</body>
</html>
