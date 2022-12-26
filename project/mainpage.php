<?php
session_start();
if(!isset($_SESSION['user'])){
    echo "<script>alert('Please login first')
    window.location.replace('login.html');
    </script>";
}
?>
<html>
<h1>
    Welcome 
</h1>
<h2>
    <?php
    echo ("You are logged in as ") . $_SESSION['user'];
    ?>
</h2>   
<button type="submit" name = submit onclick="window.location.replace('logout.php')">Logout</button>
</html>