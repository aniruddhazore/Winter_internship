<?php
session_start();
?>
<html>
<h1>
    <?php
    echo ("Welcome ") . $_SESSION['user'];
    ?>
</h1>
</html>