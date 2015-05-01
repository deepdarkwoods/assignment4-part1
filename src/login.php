<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/html');
?>

<form action="content1.php" method="POST">
    <input type="text" name="username"> 
    <div>
    <input type="submit" name="submit" value="Log In"> 
    </div>
    
</form>
