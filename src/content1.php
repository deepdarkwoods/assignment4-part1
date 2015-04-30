<?php
session_start();
error_reporting(E_ALL);
ini_set('display_error',1);

$username="";

if($_POST["username"]=="" ||$_POST["username"]==null)
    {
        echo "A username must be entered. Click <a href=\"login.php\"> here <a>to return to the login screen.";
    }
    
    //cite: borrowed most of this from cs290 lecture notes
    //checks first to see if this is an active session
    //if visits & username variable is active, it adds count to the session visits
    else
        {
        if(SESSION_status()==PHP_SESSION_ACTIVE)            
            
            if(isset($_POST["username"]))
               
                {   
                    $_SESSION['name']=$_POST["username"];                    
                }
                
            if(!isset($_POST["username"]))
                
                {
                    $_SESSION["visits"]=0;
                }
            
            
                $_SESSION["visits"]++;
                echo "Hello $_SESSION[name], you have visited this page $_SESSION[visits] times before. \n";
                echo "Click <a href =\"login.php\" >here</a> to Log Out.";
        
        
        
        }
    
    
    
    function logOut()
    {
        echo "Tried to Logout";
    }
    
    
    
?>