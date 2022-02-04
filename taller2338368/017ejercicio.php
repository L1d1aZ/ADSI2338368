<?php  

if($_POST){

$texto=$_POST["texto"];
$opc = $_POST["opc"];

    switch ($texto){
        case $opc == "1";
             echo  strtoupper($texto);
             break;
             case $opc == "2";
             echo strtolower($texto);
             break;
             case $opc == "3";
             echo ucfirst($texto); 
             default:
             break;
             
      
           }
   

}

    
    


?>