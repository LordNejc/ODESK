<?php
    include_once 'sp_mz.php';
   
?>
  <div id="okno">
  
 
<table cellpading="0" cellspacing="0" border="1">
    <tr>
        <th>Prejemnik</th>
        <th>Ponudba</th>
		<th>Pošiljatelj</th>
		<th>Zadeva</th>
		<th>Ponujena cena</th>
		<th>Izbriši ponudbo</th>
		<th>Sprejmi ponudbo</th>
		
       
    </tr>

 
 
    <?php
		
$user_id = $_SESSION['user_id'];
    
    $query = "SELECT * FROM users WHERE id =$user_id";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_array($result);
	
	$ime=$user['email'];
        $query = "SELECT * FROM sporocila WHERE (prejemnik = '$ime');";
        //pošljemo ukaz v bazo in shranimo rezultat
        $result = mysqli_query($link, $query);
      
		
        while($row = mysqli_fetch_array($result)) {
            echo '<tr>';
                echo '<td>';
				echo $row['prejemnik'];
				echo '</td>';
                echo "<td><a href='poglej_sporocilo.php?id=" .$row['id']."'>Poglej ponudbo</a></td>";
				 echo '<td>'.$row['posiljatelj'].'</td>';
				  echo '<td>'.$row['zadeva'].'</td>';
				  echo '<td>'.$row['ponudba'].'€'.'</td>';
				  $preis=$row['ponudba'];
				  echo "<td><a href='zbrisi_sporocilo.php?id=" .$row['id']."'>Izbriši ponudbo</a></td>";
				  echo '<td>'; ?> 
				  <form action="sprejem.php" method="POST">
				  <input type="hidden" name="delojemalec" value="<?php echo $row['posiljatelj']; ?>">
				  <input type="hidden" name="projekt" value="<?php echo $row['zadeva']; ?>">
				  <input type="submit" name="Sprejem" value="Sprejmi"></form></td>
				 </td>
				<?php  
            echo '</tr>';
		   
        }


	?>
	

    
</table> 
</div>
 
 <?php
    include_once 'footer.php';
?>
    </body>
</html>
