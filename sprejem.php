<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
		<link rel="stylesheet" type="text/css" href="novo_sporocilo.css" />
    </head>
    <body>
 <?php
    include_once 'header.php';
    include_once 'database.php';

?>

 <?php
      
	$user_id = $_SESSION['user_id'];
    
    $query = "SELECT * FROM users WHERE id =$user_id";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_array($result);
	?>
	
<form action="posiljanje.php" method="post" enctype="multipart/form-data"> 
  
  <div id="glavnimeni">
  
  <div id="sporočila">
  SPREJEM PONUDBE
  </div>
  

  
  </div>
  
  <div id="spodnjimeni">
  
  <div id="izbira">
  
  <div id="novasporočila">
  <a href="novo_sporocilo.php"></a>
  </div>
  
  <div id="prejeta">
  <a href="prejeta_sporocila.php"></a>
  </div>

  
  </div>
  
  
  
   <div id="okno">
  <div class="textbox">
<?php

?>



  E-naslov delojemalca: <input type="text" name="prejemnik" value="<?php echo $_POST["delojemalec"];?>" ><br>
  Izbran projekt:         <input type="text" name="zadeva" value="<?php echo $_POST["projekt"];?>"><br>
					<input type="hidden" name="posiljatelj" value="">
  Cena:<input type="text" name="preis"><br>

  
  Sporočilo:<br>
  <textarea name="sporocilo" rows="7" cols="69" >Vaša ponudba je bila sprejeta.</textarea><br><br>
   <p align="middle">
       <input type="file" name="datoteka" /><br />
  <input type="submit" value="Pošlji sporočilo" />
</p>
  </div> 
  
  </div>
  
  
  </div>
  </form>
<?php
    include_once 'footer.php';
?>

