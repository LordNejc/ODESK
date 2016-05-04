<?php
include_once 'header.php';
include_once 'database.php';

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_array($result)) {
    echo '<div class="user">';
        if (!empty($row['avatar'])) {
            echo '<img src="' . $row['avatar'] . '" alt="Avatar" />';
        } else {
            echo '<img src="slike/no.jpg" alt="Ni slike" />';
        }
        echo '<div class="userdata">';
            echo '<div class="user-name">';
			$a=$row['id'];
			echo $a;
			echo '<a href="profile.php?id=' . $a . '">';
			  echo '<span>'.$row['first_name'].'</span>';
                echo '<span>'.$row['last_name'].'</span>';
				echo '</a>';
            echo '</div>';
        echo '</div>';
				
    echo '</div>';
}


			
?>
<div style="clear: both;"></div>




<?php
include_once 'footer.php';
?>