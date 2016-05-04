<?php 

include_once 'database.php';
$projekt=$_POST["konec"];
$sql4="UPDATE projects p SET p.konec='koncano'
       WHERE $projekt=p.id;";
	   
	   mysqli_query($link,$sql4);
	   
	   
?>

<a href="projects.php">Nazaj</a>
