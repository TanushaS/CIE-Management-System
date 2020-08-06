<?php 
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"ages");
$file = "localhost:8080/WPproject/example.csv";
 $handle = fopen($file, "r+");
 $c = 0;
 while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
 {
 $name = $filesop[0];
 $age = $filesop[1];

 $sql = mysqli_query($conn,"INSERT INTO ages (name, Age) VALUES ('$name','$age')");
 }

 if($sql){
 echo "You database has imported successfully";
 }else{
 echo "Sorry! There is some problem.";
 }
 ?>
