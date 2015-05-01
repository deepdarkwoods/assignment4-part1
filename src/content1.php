<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/html');

session_start();
if(isset($_GET['action']) && $_GET['action'] == "logout")
    {
        $_SESSION = array();                                            //delete session variables
        session_destroy();                                              //delete the session
        $filePath = explode('/',$_SERVER["PHP_SELF"],-1);               //string function to grab everthing past the server
        $filePath = implode('/',$filePath);                             //put URL back together with foward-slashes
        $redirect = "http://" . $_SERVER["HTTP_HOST"] . $filePath;
        header("Location: {$redirect}/login.php",true);
        die();      

    }




    if($_POST["username"]=="" || $_POST["username"]==null)
        {
            echo "A username must be entered. Click <a href=\"login.php\"> here <a>to return to the login screen.";
        }

    //cite: borrowed most of this from cs290 lecture notes
    //checks first to see if this is an active session
    //if visits & username variable is active, it adds count to the session visits
   else
        {
        if(session_status() == PHP_SESSION_ACTIVE)            
            
            if(isset($_POST["username"]))
               
                {   
                    $_SESSION['name']=$_POST["username"];                    
                }
                
            if(!isset($_SESSION["visits"]))
                
                {
                    $_SESSION["visits"]=0;
                }
            
            
                $_SESSION["visits"]++;
                echo "Hello $_SESSION[name], you have visited this page $_SESSION[visits] times before. \n";
                echo "Click <a href =\"content1.php?action=logout\" >here</a> to Log Out.<br>";
                echo "<a href=\"content2.php\">Go to Content 2</a>";
        
        
        }
    
    
    





    
    
?>