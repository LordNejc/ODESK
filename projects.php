<?php
include_once 'header.php';
include_once 'database.php';
?>

<h1>Pregled projektov</h1>

<table border="1" cellspacing="0" cellpadding="0">
    <tr>
        <th>Št.</th>
        <th>Ime</th>
        <th>Lastnik</th>
		<th>E-mail</th>
		<th>Okvirna cena</th>
        <th>Akcije</th>
		
    </tr>
    <?php 
	
	
        $query = "SELECT *, p.id AS project_id 
                  FROM projects p INNER JOIN users u
                  ON u.id = p.user_id";
        $result = mysqli_query($link, $query);
        //izpisal bom vse projekte
        $st = 0;
        while ($row = mysqli_fetch_array($result)) {
            $st++;
            echo "<tr>";
            echo "<td>$st</td>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['first_name'].' '
                         .$row['last_name']."</td>";
					echo "<td>".$row['email']."</td>";	
			
					
              $posta=$row['email'];
			  $naslov=$row['title'];
			  $id=$row['project_id'];
			echo '<td>';
			echo $row['price'];
			echo '€';
			echo '</td>';
            echo '<td>';
			
			
			
            if ($_SESSION['user_id'] == $row['user_id']) 
			{
				$sql5="SELECT p.konec FROM projects p WHERE p.id=$id";
				$rez=mysqli_query($link,$sql5);
				if($row["konec"]=='koncano')
				{
					echo 'Koncano';
				}
				
				else
				{
					
				
			    
                echo '<a href="project_edit.php?id='.$row['project_id'].'">Uredi</a> ';
                echo '<a href="project_delete.php?id='.$row['project_id'].'">Izbriši</a>';
				echo '<form method="POST" action="confirm.php">';?>
				<input type="hidden" name="konec" value="<?php echo $row['project_id'];?>"><?php
					echo '<input type="submit" name="zakljuci" value="Zaključi">';
				}
            }
			
			
			
			else 
			{
				
			  if($row["konec"]=='koncano')
				{
					echo 'Koncano';
				}
			     
				 else
				 {
				    echo '<form method="POST" action="novo_sporocilo.php">'; ?>
					<input type="hidden" name="skriti" value="<?php print $posta; ?>"/>
					<input type="hidden" name="zadeva" value="<?php print $naslov; ?>"/><?php
					echo '<input type="submit" value="Oddaj ponudbo">';
		            echo '</form>';
				 }
		}
            echo "</td>";
            echo '</tr>';
        }
    ?>
</table>

<?php
include_once 'footer.php';
?>