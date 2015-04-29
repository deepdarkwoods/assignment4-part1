<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
?>


<!DOCTYPE html>
<html>
    
<head>
<meta charset="UTF-8">
</head>
<body></body>
<Header>Enter 4 Numbers:</Header>

<form method="GET" action="multtable.php">
    <Legend>Positive Integers Only !</Legend>
    <input type="text" name="minx" >Min-Multiplicand<br>
    <input type="text" name="maxx" >Max-Multiplicand<br>
    <input type="text" name="miny" >Min-Multiplier<br>
    <input type="text" name="maxy" >Max-Mulitiplier<br>
    <input type="submit" name="submit">        
</form>    
</body>  
</html>











<?php
//flags to validate we have integers in all fields
$flagx1 = $flagx2 = $flagy1 = $flagy2 = false;
$minx = $maxx = $miny = $maxy = 0;


//check if user has submitted form before we display form errors
if(isset($_GET["submit"]))
    {
        //multiplicand
        if (isset($_GET["minx"]) && ($_GET["minx"] !==''))
            {
                $minx=$_GET["minx"];
                if(!is_numeric($minx)){echo "MIN multiplicand must be a number" . "<br>";}
                else $flagx1=true;
            }
        else
            {
                echo "Missing Parameter:\t \t MIN multiplicand";
                echo "<br>";
            }    
        
        if(isset($_GET["maxx"]) && ($_GET["maxx"] !==''))
            {
                $maxx=$_GET["maxx"];
                if(!is_numeric($maxx)){echo "MAX multiplicand must be a number" . "<br>";}
                else $flagx2=true;
            }
        else
            {
                echo "Missing Parameter:\t \t MAX multiplicand";
                echo "<br>";
            }
        
            
            
        //multiplier
        if(isset($_GET["miny"]) && ($_GET["miny"] !==''))
            {
                $miny=$_GET["miny"];
                 if(!is_numeric($miny)){echo "MIN multiplier must be a number" . "<br>";}
                 else $flagy1=true;
            }
        else
            {
                echo "Missing Parameter:\t \t MIN multiplier";
                echo "<br>";
            }
        //****************
        
        if(isset($_GET["maxy"]) && ($_GET["maxy"] !==''))
            {
                $maxy=$_GET["maxy"];
                if(!is_numeric($maxy)){echo "MAX multiplier must be a number" . "<br>";}
                 else $flagy2=true;
            }
        else
            {
                echo "Missing Parameter:\t \t MAX multiplier";
                echo "<br>";
            }     
            
            
            
        //check if min is greater than max    
        if (isset($_GET["minx"]) && ($_GET["minx"] !=='') && isset($_GET["maxx"]) && ($_GET["maxx"] !==''))
            {
                if($minx>$maxx)
                    {
                    echo "Minimum multiplicand larger than maximum. Resubmit Number.";
                    echo "<br>";
                    $flagx1=false;
                    }
            }
        
        if (isset($_GET["miny"]) && ($_GET["miny"] !=='') && isset($_GET["maxy"]) && ($_GET["maxy"] !==''))
            {
                if($miny>$maxy)
                    {
                    echo "Minimum multiplier larger than maximum.Resubmit Number.";
                    echo "<br>";
                    $flagy1=false;
                    }
            }
            
                     
            
            
            
            
            //if validation success, build table  
           if ($flagx1==true && $flagx2==true && $flagy1==true && $flagy2==true )
               {
              
                    $rowx = $minx;   //row variable to increment
                    $colmy = $miny;  //column variable to increment
                    $result =0;      //result of multiplication
                    $rowHeader = $minx;
                    $columnHeader = $miny;
                    $blankSpace = "  ";
                    
                    
                    echo "<table border=1";
                    //print column Header;
                    
                    echo "<tr>";                // first row
                    echo "<td> {$blankSpace} </td> \t" ;      // first blank cell
                    
                    while($columnHeader <= $maxy)
                        {                            
                             echo "\t<td><b>$columnHeader</b></td>" ;            
                            $columnHeader++;
                        }
                     echo "</tr><br>";              //end row
                       
                    
                           
                    
                    //main results
                    while($rowx <= $maxx)
                     {
                         echo "<tr>";
                         
                         //print row Header
                         echo "<td>" . $rowHeader . "</td>";
                         while($colmy <= $maxy)
                             {
                                 $result = $rowx * $colmy;
                                 echo "\t" . "<td>" . $result. "</td>\t " ;                  
                                $colmy++; 
                                 
                             }
                        $rowHeader++;
                         $colmy=$miny;
                         echo "</tr> <br>";
                         $rowx++;
                     }
                
           
                    echo "</table>";
       
                }
     
    
     
     
    }
  

    
    

?>











