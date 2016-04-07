 <?php
 $username = 'root';
    $password = '';
    $database = 'odesk';
    $server = 'localhost';
    //povezava na podatkovno bazo
    $link = mysqli_connect($server, $username, $password, $database);
    
    //za pravilno delanje šumnikov
    mysqli_query($link,"SET NAMES 'utf8'"); 
	
	// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
?>


<?php
include_once 'header.php';
include_once 'database.php';
?>

<h1>Ponudba</h1>
<form>
 <?php
 echo $pn="Ponudba: <input type=text name=pn>€<br>"
  ?>
  <input type="submit" value="Pošlji">
  $query = "SELECT * FROM countries";
  $result = mysqli_query($link, $query);
</form>

<?php
$query = "UPDATE sporocila(cena) VALUE("$pn") ";
mysqli_query($link, $query);

include_once 'footer.php';
?>