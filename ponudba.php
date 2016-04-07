<?php
include_once 'header.php';
include_once 'database.php';
?>

<h1>Ponudba</h1>
<form action="demo_form.asp">
  Ime<input type="text" name="im"><br>
  Priimek<input type="text" name="pr"><br>
  <?php
	$result = mysqli_query($session, "SELECT u.email FROM users u");
	echo "Email: ".$result;
  ?>
   <br>
  Naslov<input type="text" name="ns"><br>
  Ponudba<input type="text" name="pn"><br>
  <input type="submit" value="Pošlji">
</form>

<?php
include_once 'footer.php';
?>