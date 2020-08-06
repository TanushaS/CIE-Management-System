<?php  
 $connect = mysqli_connect("localhost", "root", "", "ages");  
 include ("PHPExcel/IOFactory.php");  
 $html="<table border='1'>";  
 $objPHPExcel = PHPExcel_IOFactory::load('example.xls');  
 foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)   
 {  
      $highestRow = $worksheet->getHighestRow();  
      for ($row=2; $row<=$highestRow; $row++)  
      {  
           $html.="<tr>";  
           $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());  
           $age= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());  
           $sql = "INSERT INTO ages(name, Age) VALUES ('".$name."', '".$age."')";  
           mysqli_query($connect, $sql);  
           $html.= '<td>'.$name.'</td>';  
           $html .= '<td>'.$age.'</td>';  
           $html .= "</tr>";  
      }  
 }  
 $html .= '</table>';  
 echo $html;  
 echo '<br />Data Inserted';  
 ?>  
