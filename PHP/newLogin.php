<html>
	<body>
		<?php
		$conn = mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"wpproject");

		$search = $_POST["username"];
		$pwd= $_POST["password"];

	$query = "SELECT * FROM `login_table` WHERE `Email_id` = '$search' and password='$pwd' ";
	$query2 = "SELECT * FROM `faclogtable` WHERE `Email_id` = '$search' and password='$pwd' ";

		$result = mysqli_query($conn,$query);
		$result2 = mysqli_query($conn,$query2);
		if(mysqli_num_rows($result) != 0){
		header("location:homepage.html");}
			
		else if(mysqli_num_rows($result2) != 0){
		header("location:fachome.html");
		}
		else
			header("location:project.html");
			//echo "Found<br />";

		//$row = mysqli_fetch_array($result);
		//echo "Name : ".$row["Name"];
		//echo "<br />Address 1 : ".$row["addr1"];
		//echo "<br />Address 2 : ".$row["addr2"];
		//echo "<br />Email ID : ".$row["Email_id"];
		
		?>
	</body>
</html>
