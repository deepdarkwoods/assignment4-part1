<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/html');

session_start();



if(isset($_SESSION['name']))
    {
        echo "<a href=\"content1.php\">Go back to Content 1</a>";
    }
    else
    header("Location:login.php");

?>