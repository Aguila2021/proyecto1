<?php

echo "<h1>RESULTADO </h1>";

extract($_POST);
$opc=$_POST["operaciones"];

if(isset($_POST["enviar"])){
  
  switch ($opc) {
    case 'suma':
     $resultado= $n1 + $n2;
     echo "la suma de". $n1. "+". $n2 . "=" . $resultado;
      break;

      case 'resta':
        $resultado= $n1 - $n2;
        echo "la resta de". $n1. "-". $n2 . "=" . $resultado;
         break;

         case 'multiplicacion':
          $resultado= $n1 * $n2;
          echo "la multiplicacion de". $n1. "x". $n2 . "=" . $resultado;
           break;
           
           case 'division':
            $resultado= $n1 / $n2;
            echo "la division de". $n1. "/". $n2 . "=" . $resultado;
             break;
    
    
  }


}


?>