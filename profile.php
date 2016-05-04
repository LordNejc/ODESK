<?php
    include_once 'header.php';
    include_once 'database.php';
    
    //shrani si id trenutno prijavljenega uporabnika
    $user_id = $_SESSION['user_id'];
	
		$uporabnik=$_GET['id'];
	
 
	$query = "SELECT * FROM users u  WHERE (id=$uporabnik)";
    $result = mysqli_query($link, $query);
	echo "To je profil uporabnika:";
	echo ' ';
    
    
	while($row=mysqli_fetch_array($result))
	{
		echo $row['first_name'];
		echo ' ';
		echo $row['last_name'];
	}
	echo '<br/>';
	echo '<br/>';
	echo "Napišite svojo izkušnjo v poslovanju s tem uporabnikom oz. ga ocenite";
    echo '<br/>';
	echo '<br/>';
	
	echo '<form method="POST" action=obdelava.php>';
	echo 'Zadeva:';
	echo '<input type="text" name="zadeva">';?>
	<input type="hidden" name="id" value="<?php echo $uporabnik; ?>"><?php
	echo '<br/>';
	echo '<br/>';
	echo "Vaše ime:";
	echo '<input type="text" name="ime">';
	echo '<br/>';
	echo '<br/>';
	echo 'Ocena:';echo '<br/>';
	echo '<textarea rows="6" cols="50" name="ocena"></textarea>';
	echo '<br/>';
	echo '<input type="submit" value="Piši">';
	echo '<br/>';
	echo '<br/>';
	echo '<br/>';
	echo '<br/>';
	
	echo "Pretekle izkušnje ostalih uporabnikov s tem uporabnikom: ";
	echo '<br/>';echo '<br/>';
	$query2 = "SELECT title, description, pisec FROM skills WHERE (feedback=$uporabnik)";
    $result2 = mysqli_query($link, $query2);
	
	while($row=mysqli_fetch_array($result2))
	{
		echo 'Zadeva:'; echo ' ';
		echo $row['title'];
		echo '<br/>';
		echo "Zapisal uporabnik: ";
		echo $row['pisec'];
		echo '<br/>';
		echo 'Ocena:'; echo ' ';
		echo $row['description'];
		echo '<br/><br/>';
	}
	
  
?>

