<!DOCTYPE html>
<html>
<body>
 
<?php
 
    echo "<h1>Logged out successfully</h1>";
 
    session_start();
    session_destroy();
 
?>
<h2><a href="login1.php">CLICK TO LOGIN</a>
 
</body>
</html>