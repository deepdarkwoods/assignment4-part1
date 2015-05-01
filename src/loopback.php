<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/plain');

$getArray = array();
$postArray = array();

if(isset($_GET["submit"]))
    {      
  
            
        if(!is_array($_GET))
            {
                echo "Null Value entered for GET";
            }
        else
            {
                $getArray=json_encode($_GET);
                echo $getArray;
            }         
    
    }



if(isset($_POST["submit"]))
    {      
  
            
        if(!is_array($_POST))
            {
                echo "Null Value entered for POST";
            }
            else
                {
                     $postArray=json_encode($_POST);
                    echo $postArray;
                }         
    
    }

?>






