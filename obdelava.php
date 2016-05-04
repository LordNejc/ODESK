<?php 
include_once 'database.php';

$naslov=$_POST["zadeva"];
$ocena=$_POST["ocena"];
$feed=$_POST["id"];
$ime=$_POST["ime"];
$query =   "INSERT INTO skills (title,description,feedback,pisec)
						VALUES ('$naslov','$ocena','$feed','$ime');";
mysqli_query($link, $query);
    
Header("Location:users.php");

?>

