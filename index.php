<?php 
    //session_start();
    include 'header.php';
    
    if (isset($_SESSION['user_id'])) {
        //je prijavljen
        echo $_SESSION['first_name'];
    }
    else {
        echo 'Nisi prijavljen!';
    }
   
?>

<h1>Seznam uporabnikov</h1>

<form action="users.php" method="POST">
    <input type="submit" value="Uporabniki" />
</form>
        
<?php 
    include 'footer.php';
?>