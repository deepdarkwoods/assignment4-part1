<?php
error_reporting(E_ALL);
ini_set('display_error',1);

if(isset($_GET["username"]))
    {
    $username=$_GET["username"];
    echo $username;
    }
?>